<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModels\MovieViewModel;
use App\ViewModels\MoviesViewModel;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    

    public function index()
    {
         $token='eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJmY2FkMWUzNjMxNmVjZmVlNTA5M2U2ZDQzYjZiOGE4ZiIsInN1YiI6IjVmODVhMTFlMmQ4ZWYzMDAzOWI5YTE5NSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.4xE5I-sbpx78sFS-0PlCwoN6dlAMzBW7tsBghw8EpBg';   
         $api='https://api.themoviedb.org/3/movie/popular';
         $apiGenre='https://api.themoviedb.org/3/genre/movie/list';
    
        $popularMovies=Http::withToken($token)
            ->get($api)
            ->json()['results'];
    
         $genres=Http::withToken($token)
            ->get($apiGenre)
            ->json()['genres'];      
       

    $viewModel = new MoviesViewModel($popularMovies,$genres);
        
    return view('movies.index',$viewModel);
    }

    public function show($id)
    {
        $token='eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJmY2FkMWUzNjMxNmVjZmVlNTA5M2U2ZDQzYjZiOGE4ZiIsInN1YiI6IjVmODVhMTFlMmQ4ZWYzMDAzOWI5YTE5NSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.4xE5I-sbpx78sFS-0PlCwoN6dlAMzBW7tsBghw8EpBg';   
        $api='https://api.themoviedb.org/3/movie/';

    
        $movie=Http::withToken($token)
            ->get($api .$id.'?append_to_response=credits,videos,images')
            ->json();

        $viewModel = new MovieViewModel($movie);

        return view('movies.show',$viewModel);
    }
}
