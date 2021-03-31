<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllStudents() {
        $allStudent = Student::all()->toJson();
        
        return response($allStudent, 200);
    }

    public function createStudent(Request $request) {
    // logic to create a student record goes here
    }

    public function getStudent($id) {
        if (Student::where('id', $id)->exists()) {
            $student = Student::where('id', $id)->get();

            return response()->json(crypt('student'));
        } else {
            return  response()->json(['message' => 'not found', 404]);
        }
    }

    public function updateStudent(Request $request, $id) {
    // logic to update a student record goes here
    }

    public function deleteStudent ($id) {
    // logic to delete a student record goes here
    }
}
