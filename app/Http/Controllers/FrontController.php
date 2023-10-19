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

    public function workWithUs(){
        return view('lavora');
    }

    public function searchAnnouncements(Request $request)
    {
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->latest()->paginate(8);
        return view('announcements.index', compact('announcements'));
    }
}