<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
{
    $nationalChapters = Chapter::where('category', 'National')->get();
    $internationalChapters = Chapter::where('category', 'International')->get();

    return view('welcome', compact('nationalChapters', 'internationalChapters'));
}
}
