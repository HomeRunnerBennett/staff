<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    // Show all students
    public function index()
    {
        $candidate = Candidate::all(); // Get all students from database
        return view('candidate.index', compact('candidate'));
    }

    // Show the form to create a new student
    public function create()
    {
        return view('candidate.create');
    }

    // Store a new student in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'ethnicity' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
            'age' => 'required|integer|min:5|max:20',
        ]);

        Candidate::create($validated);

        return redirect()->route('candidate.index')->with('success', 'Candidate added successfully!');
    }
}