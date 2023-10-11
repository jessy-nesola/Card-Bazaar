<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateAnnouncementForm extends Component
{
    public $title, $body, $price, $category;

    protected $rules = [
        'title'=> 'required|min:4',
        'body' => 'required|min:8',
        'price' => 'required|numeric',
        'category' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $category = Category::find($this->category);
        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
            'uri' => Str::slug($this->title, '-')
        ]);
        Auth::user()->announcements()->save($announcement);

        $this->reset('title','body','price','category');
        session()->flash('success', 'Announcement Created');
    }

    public function render()
    {
        return view('livewire.create-announcement-form');
    }
}
