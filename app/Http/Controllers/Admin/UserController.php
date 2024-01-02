<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.Users.index', compact('users'));
    }

    /**
     * Set Admin
     */
    public function setAdmin(User $user)
    {
        $user->role_as = 1; // Set role_as to 1 for admin
        $user->save();

        // Redirect back or to another page with a success message
        return redirect()->back()->with('success', 'User set as admin successfully');
    }
}
