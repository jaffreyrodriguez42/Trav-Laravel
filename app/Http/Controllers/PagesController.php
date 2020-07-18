<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = "This is the Index Page JDR";
        return view('pages.index', compact('title'));
    }

    public function about()
    {
        $title = "About Us";
        return view('pages.about')->with("title", $title);
    }

    public function services()
    {
        $data = [
            'title' => 'Services Page Title',
            'content' => 'This is the Services page',
            'services' => ['Web Dev', 'Programming', 'SEO'],
        ];
        return view('pages.services')->with($data);
    }
}
