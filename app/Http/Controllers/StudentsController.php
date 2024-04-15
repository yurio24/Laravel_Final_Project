<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function index()
    {
        $data = DB::table('students') -> select ('first_name' , 'last_name', 'email')->get();
        dd('first_name' , 'last_name', 'email');

        return view('students.index', ['students' => $data]);
    }
}
