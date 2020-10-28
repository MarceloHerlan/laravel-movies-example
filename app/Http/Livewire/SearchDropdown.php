<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;



class SearchDropdown extends Component
{
    public $search='';

    public function render()
    {
        $searchResults=[];
        $token='eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJmY2FkMWUzNjMxNmVjZmVlNTA5M2U2ZDQzYjZiOGE4ZiIsInN1YiI6IjVmODVhMTFlMmQ4ZWYzMDAzOWI5YTE5NSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.4xE5I-sbpx78sFS-0PlCwoN6dlAMzBW7tsBghw8EpBg';   
        $api=('https://api.themoviedb.org/3/search/movie?query='.$this->search);
        
        if(strlen($this->search)>2){
        $searchResults=Http::withToken($token)
            ->get($api)
            ->json()['results'];
        }

      

        return view('livewire.search-dropdown',compact('searchResults'));
    }
}
