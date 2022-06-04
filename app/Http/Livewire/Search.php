<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Search extends Component
{
    public $search;
    public $searchResults = [];

    public function updatedSearch($newValue)
    {
        $response = Http::get('https://itunes.apple.com/search/?term='.$this->search.'&limit=10');
        $this->filterResults($response->json()['results']);
    }

    private function filterResults($results){
        $this->searchResults = array_filter($results, function($song){
            return $song['wrapperType'] === 'track';
        });
    }

    public function render()
    {
        return view('livewire.search');
    }
}
