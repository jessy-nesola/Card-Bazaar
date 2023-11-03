<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class IndexRevisor extends Component
{
    public $search;

    public function destroy(Announcement $announcement_to_check)
    {
        $announcement_to_check->delete;
        session()->flash('success', 'Annuncio Eliminato');
    }

    public function render()
    {
        if ($this->search) {
            $announcements_to_check = Announcement::where('title', 'LIKE', '%' . $this->search . '%')
                ->orWhere('category', 'LIKE', '%' . $this->search . '%')
                ->get();
        } else {
            $announcements_to_check=Announcement::all();
        }

        return view('livewire.index-revisor', compact('announcements_to_check'));
    }
}
