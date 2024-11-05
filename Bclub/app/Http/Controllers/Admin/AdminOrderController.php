<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\User; // Ensure you have the User model imported

class AdminOrderController extends Controller
{
    public function index()
    {
        // Fetch all deposits with user relationship
        $deposits = Deposit::with('user')->get();

        // Return the view with deposits
        return view('admin.orders.index', compact('deposits'));
    }

    public function updateStatus(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'status' => 'required|in:approved,rejected',
        ]);

        // Find the deposit by ID and update the status
        $deposit = Deposit::findOrFail($id);
        $deposit->status = $request->input('status');
        $deposit->save();



        // Redirect back with a success message
        return redirect()->route('admin.orders.index')->with('success', 'Order status updated successfully.');
    }


    public function destroy($id)
    {
        // Find the deposit by ID and delete it
        $deposit = Deposit::findOrFail($id);
        $deposit->delete();

        // Redirect back with a success message
        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully.');
    }
}
