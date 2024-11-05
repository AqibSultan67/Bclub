<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function destroy($id)
    {
        \Log::info("Delete request received for user ID: " . $id);
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
        }

        return redirect()->route('admin.users.index')->with('error', 'User not found.');
    }
}
