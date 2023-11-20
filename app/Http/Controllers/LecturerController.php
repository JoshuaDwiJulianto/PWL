<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;
use App\Models\Department;

class LecturerController extends Controller
{
    public function index()
    {
        $data['lecturers'] = Lecturer::all();
        // $data ['lecturers'] = lecturer::where('departement_id',1)->get();


        return view('lecturer.index', $data);       
    }
    public function create()
    {
        $data['departments'] = Department::pluck
        ('name', 'id');
        return view('lecturer.create', $data);
    }
    public function store(Request $request)
    {
        Lecturer::create($request->all());

        return redirect()->route('lecturer.index');
    }
}
