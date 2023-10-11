<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage()
    {
        $announcements = Announcement::take(7)->get()->sortByDesc('created_at');
        return view('homepage', compact('announcements'));
    }
}
