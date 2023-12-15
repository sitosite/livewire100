<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Articles;

class ShowPosts extends Component
{
    use WithPagination;

    public $search = '';

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function searchReset() 
    {
        $this->search = '';
        $this->resetPage();
    }
 
    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Articles::where('title', 'like', '%' . $this->search . '%')->paginate(3),
        ]);
    }
}