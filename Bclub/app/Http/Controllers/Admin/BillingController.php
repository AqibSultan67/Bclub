<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BillingController extends Controller
{
    public function index()
    {
        $paymentMethods = PaymentMethod::all();
        return view('admin.billing.index', compact('paymentMethods'));
    }

    public function create()
    {
        return view('admin.billing.create');
    }

    public function store(Request $request)
    {
        // Log request data for debugging
        \Log::info('Store request data: ', $request->all());

        // Validate input data
        $request->validate([
            'paymentMethod' => 'required|string|max:255',
            'paymentAddress' => 'required|string|max:255',
        ]);

        // Check if QR code file is an image
        $qrCodeFile = $request->file('qrCode');
        $mimeType = mime_content_type($qrCodeFile->getPathname());
        $validMimeTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml'];

        if (!in_array($mimeType, $validMimeTypes)) {
            return back()->withErrors(['qrCode' => 'The QR code must be a valid image file.']);
        }

        try {
            // Store QR code image
            $imageName = Str::random(10) . '.' . $qrCodeFile->getClientOriginalExtension();
            $qrCodePath = $qrCodeFile->storeAs('qrcode', $imageName, 'public');

            \Log::info('QR Code stored at: ' . $qrCodePath);

            // Create new PaymentMethod record
            PaymentMethod::create([
                'paymentMethod' => $request->paymentMethod,
                'qrCode' => $qrCodePath,
                'paymentAddress' => $request->paymentAddress,
            ]);

            \Log::info('Payment method stored in database successfully.');

            return redirect()->route('admin.billing.index')->with('success', 'Payment method created successfully!');
        } catch (\Exception $e) {
            \Log::error('Error storing payment method: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to store payment method.']);
        }
    }

    public function edit($id)
    {
        $paymentMethod = PaymentMethod::findOrFail($id);
        return view('admin.billing.edit', compact('paymentMethod'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'paymentMethod' => 'required|string|max:255',
            'paymentAddress' => 'required|string|max:255',
        ]);

        $paymentMethod = PaymentMethod::findOrFail($id);
        $paymentMethod->paymentMethod = $request->paymentMethod;
        $paymentMethod->paymentAddress = $request->paymentAddress;

        if ($request->hasFile('qrCode')) {
            $qrCodeFile = $request->file('qrCode');
            $mimeType = mime_content_type($qrCodeFile->getPathname());
            $validMimeTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml'];

            if (!in_array($mimeType, $validMimeTypes)) {
                return back()->withErrors(['qrCode' => 'The QR code must be a valid image file.']);
            }

            // Delete the old QR Code if exists
            if ($paymentMethod->qrCode) {
                Storage::delete($paymentMethod->qrCode);
            }
            // Store the new QR Code
            $path = $qrCodeFile->store('qrcode', 'public');
            $paymentMethod->qrCode = $path;
        }

        $paymentMethod->save();

        return redirect()->route('admin.billing.index')->with('success', 'Payment method updated successfully!');
    }

    public function destroy($id)
    {
        $paymentMethod = PaymentMethod::findOrFail($id);

        // Delete QR Code file if it exists
        if ($paymentMethod->qrCode) {
            Storage::disk('public')->delete($paymentMethod->qrCode);
        }

        // Delete the payment method record
        $paymentMethod->delete();

        return redirect()->route('admin.billing.index')->with('success', 'Payment method deleted successfully!');
    }
}
