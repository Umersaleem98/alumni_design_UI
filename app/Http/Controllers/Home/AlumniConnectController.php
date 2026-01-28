<?php

namespace App\Http\Controllers\Home;

use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlumniConnectController extends Controller
{
    public function index()
    {

    $nationalOrder = [
        'Islamabad',
        'Karachi',
        'Lahore',
        'Faisalabad',
        'Gujranwala',
        'Multan',
        'Bahawalpur',
        'Peshawar',
        'Quetta'
    ];

    $nationalChapters = Chapter::where('category', 'National')
        ->orderByRaw("FIELD(chapter_name, '" . implode("','", $nationalOrder) . "')")
        ->get();

    $internationalChapters = Chapter::where('category', 'International')
        ->orderBy('id') // keeps original order
        ->get();


    //     $nationalChapters = Chapter::where('category', 'National')->get();
    // $internationalChapters = Chapter::where('category', 'International')->get();
        return view('pages.templates.alumniconnect.index', compact('nationalChapters', 'internationalChapters'));
    }
}
