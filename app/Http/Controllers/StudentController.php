<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function index()
    {
        // $students = Student::all();
        $user = Auth::user();
        $id = Auth::id();

        $students = Student::paginate(2);
        return view(
            'index',
            [
                'students' => $students,
                'user' => $user,
                'id' => $id
            ]
        );
    }

    public function filter()
    {
        $students = Student::where('score', '>=', 85)
            ->where('name', 'LIKE', '%a%')
            ->get();
        return view('filter', compact('students'));
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view(
            'show',
            [
                'student' => $student
            ]
        );
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'score' => 'required',
        ]);

        Student::create([
            'name' => $request->name,
            'score' => $request->score,
            'teacher_id' => 1
        ]);

        return Redirect::route('index');
    }

    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'score' => 'required',
        ]);
        $student->update([
            'name' => $request->name,
            'score' => $request->score
        ]);
        return Redirect::route('index');
    }

    public function delete(Student $student)
    {
        $student->delete();
        return Redirect::route('index');
    }
}
