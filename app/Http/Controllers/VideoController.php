<?php

namespace App\Http\Controllers;

use App\Video;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->paginate(24);
        return view('videos.index', compact('videos'));
    }
}
