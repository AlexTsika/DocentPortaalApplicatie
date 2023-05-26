<?php

namespace App\Http\Controllers;
use App\DataTables\TeachersDataTable;


use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
     public function index(TeachersDataTable $dataTable)
    {
        return $dataTable->render('teachers.index');
    }
}
