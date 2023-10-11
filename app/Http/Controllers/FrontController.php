<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage()
    {
        $announcements = Announcement::take(7)->orderBy('created_at', 'desc')->get();
        return view('homepage', compact('announcements'));
    }
}
