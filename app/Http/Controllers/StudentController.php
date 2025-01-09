<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller\middleware;

class StudentController extends Controller
{
    
    public function index()
    {
        $data['header_title'] = 'Student List';
        $data['students'] = User::where('usertype', 'student')->get(); // Fetch only student users
        return view('student.student.list', $data);
    }

    // Show the form to create a new student
    public function create()
    {
        $data['header_title'] = 'Add New Student';
        return view('student.student.create', $data);
    }

    // Store a new student
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
            'usertype' => 'student', // Change usertype to student
        ]);

        return redirect()->route('student.index')->with('success', 'Student added successfully.');
    }

    // Show the form to edit a student
    public function edit(User $student)
    {
        $data['header_title'] = 'Edit Student';
        $data['student'] = $student; // Pass the student data to the view
        return view('student.student.edit', $data);
    }

    // Update student details
    public function update(Request $request, User $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $student->id,
        ]);

        $student->update($request->only('name', 'email'));

        return redirect()->route('student.index')->with('success', 'Student updated successfully.');
    }

    // Delete a student
    public function destroy(User $student)
    {
        $student->delete();

        return redirect()->route('student.index')->with('success', 'Student deleted successfully.');
    }
}
