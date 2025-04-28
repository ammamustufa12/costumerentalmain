<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // List all users
    public function index()
    {
        $users = User::with('role')->paginate(10);
        return view('Admin.UserManagement.list_user', compact('users'));
    }

    // Show the create form
    public function create()
    {
        $roles = Role::all();
        return view('Admin.UserManagement.Add_user', compact('roles'));
    }

    // Store new user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:6',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('UserManagement.index')->with('success', 'User created successfully.');
    }

    // Show a single user
    public function show($id)
    {
        $user = User::with('role')->findOrFail($id);
        return view('Admin.UserManagement.show_user', compact('user'));
    }

    // Show edit form
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('Admin.UserManagement.edit_user', compact('user', 'roles'));
    }

    // Update user
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|confirmed|min:6',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('UserManagement.index')->with('success', 'User updated successfully.');
    }

    // Delete user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('UserManagement.index')->with('success', 'User deleted successfully.');
    }
}
