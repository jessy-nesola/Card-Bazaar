<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage()
    {
        $announcements = Announcement::where('is_accepted', true)->latest()->take(3)->get();
        return view('homepage', compact('announcements'));
    }
}