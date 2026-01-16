<?php

namespace App\Http\Controllers\Home;

use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlumniConnectController extends Controller
{
    public function index()
    {
        $nationalChapters = Chapter::where('category', 'National')->get();
    $internationalChapters = Chapter::where('category', 'International')->get();
        return view('pages.templates.alumniconnect.index', compact('nationalChapters', 'internationalChapters'));
    }
}
