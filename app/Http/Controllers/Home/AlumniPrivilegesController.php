<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumniPrivilegesController extends Controller
{
    public function index()
    {
        return view('pages.templates.PlumniPrivileges.index');
    }
}
