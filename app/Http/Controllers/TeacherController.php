<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller\middleware;

class TeacherController extends Controller
{
    
    public function index()
    {
        $data['header_title'] = 'Teacher List';
        $data['teachers'] = User::where('usertype', 'teacher')->get(); // Fetch only teacher users
        return view('teacher.teacher.list', $data);
    }

    // Show the form to create a new teacher
    public function create()
    {
        $data['header_title'] = 'Add New Teacher';
        return view('teacher.teacher.create', $data);
    }

    // Store a new teacher
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
            'usertype' => 'teacher', // Change usertype to teacher
        ]);

        return redirect()->route('teacher.index')->with('success', 'Teacher added successfully.');
    }

    // Show the form to edit a teacher
    public function edit(User $teacher)
    {
        $data['header_title'] = 'Edit Teacher';
        $data['teacher'] = $teacher; // Pass the teacher data to the view
        return view('teacher.teacher.edit', $data);
    }

    // Update teacher details
    public function update(Request $request, User $teacher)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $teacher->id,
        ]);

        $teacher->update($request->only('name', 'email'));

        return redirect()->route('teacher.index')->with('success', 'Teacher updated successfully.');
    }

    // Delete a teacher
    public function destroy(User $teacher)
    {
        $teacher->delete();

        return redirect()->route('teacher.index')->with('success', 'Teacher deleted successfully.');
    }
}
