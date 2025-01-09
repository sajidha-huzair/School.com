<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller\middleware;

class AdminController extends Controller
{
    public function index()
    {
        $data['header_title'] = 'Admin List';
        $data['admins'] = User::where('usertype', 'admin')->get(); // Fetch only admin users
        return view('admin.admin.list', $data);
    }

    // Show the form to create a new admin
    public function create()
    {
        $data['header_title'] = 'Add New Admin';
        return view('admin.admin.create', $data);
    }

    // Store a new admin
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'usertype' => 'admin', // Change usertype to admin
        ]);

        return redirect()->route('admin.index')->with('success', 'Admin added successfully.');
    }

    // Show the form to edit an admin
    public function edit(User $admin)
    {
        $data['header_title'] = 'Edit Admin';
        $data['admin'] = $admin; // Pass the admin data to the view
        return view('admin.admin.edit', $data);
    }

    // Update admin details
    public function update(Request $request, User $admin)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $admin->id,
        ]);

        $admin->update($request->only('name', 'email'));

        return redirect()->route('admin.index')->with('success', 'Admin updated successfully.');
    }

    // Delete an admin
    public function destroy(User $admin)
    {
        $admin->delete();

        return redirect()->route('student.dashboard')->with('success', 'Admin deleted successfully.');
    }
}
