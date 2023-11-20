<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;

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
        return view('lecturer.create');
    }
}
