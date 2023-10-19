<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage()
    {
        $announcements = Announcement::where('is_accepted', true)->latest()->take(4)->get();
        return view('homepage', compact('announcements'));
    }

    public function workWithUs(){
        return view('lavora');
    }

    public function searchAnnouncements(Request $request)
    {
        $announcements_search = Announcement::search($request->searched)->get()->pluck('id');
        $announcements = Announcement::whereIn('id', $announcements_search)->latest()->paginate(8)->withQueryString();
        return view('announcements.index', compact('announcements'));
    }
}