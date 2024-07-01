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
//        $users = User::all();
        $users = User::paginate(10); // Adjust the number as needed
        return view('admin.Users.index', compact('users'));
    }

    /**
     * Set Admin
     */
    public function setAdmin(User $user)
    {
        // Toggle admin status
        $user->role_as = $user->role_as == 1 ? 0 : 1;
        $user->save();

        $status = $user->role_as == 1 ? 'set as admin' : 'revoked as admin';
        // Redirect back with a success message
        return redirect()->back()->with('success', "User's role successfully {$status}.");
    }
}
