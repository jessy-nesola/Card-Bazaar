<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index()
    {
        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        return view('revisor.index', compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Annuncio accettato');
    }

    public function rejectAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', 'Annuncio rifiutato');
    }

    public function becomeRevisor(Request $request)
    {
        $request->validate([
            'aboutYou' => 'required|min:10'
        ]);

        $data = [
            'aboutYou' => $request->aboutYou
        ];

        Mail::to('admin@cardbazaar.it')->send(new BecomeRevisor(Auth::user(), $data));

        return view('homepage')->with('send.ok', 'Richiesta inviata con successo');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('bazaar:makeUserRevisor', ["email"=>$user->email]);
        return view('homepage')->with('send.ok', "$user->name è diventato revisore.");
    }
}
