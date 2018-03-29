<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::latest()->get();
        return view('pages.standings', compact('pages'));
    }
}
