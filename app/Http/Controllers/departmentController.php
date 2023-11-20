<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class departmentController extends Controller
{
    public function index()
    {
        $t['departments'] = Department::all();
        


        return view('department.index', $t);       
    }
}

