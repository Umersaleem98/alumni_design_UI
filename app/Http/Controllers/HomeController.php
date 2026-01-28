<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    return view('welcome', compact('nationalChapters', 'internationalChapters'));
}


public function Chapter($id)
{
    $chapters = Chapter::find($id);
    return view('pages.templates.chapter.index', compact('chapters'));
}

}
