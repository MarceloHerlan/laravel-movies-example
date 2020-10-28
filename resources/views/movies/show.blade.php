@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="{{$movie['poster_path']}}" alt="parasite" class="w-96" style="width: 24rem">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">{{$movie['title']}}</h2>
                <div class="flex items-center text-gray-400">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <span class="ml-1">{{$movie['vote_average'] }}</span>
                    <span class="mx-2">/<span>
                    <span >{{$movie['release_date']}}</span>    
                    </div>
                    <div class="text-gray-400">
                        <span>
                            {{$movie['genres']}}
                        </span>
                    </div>    
                    <p class="text-gray-300 mt-8">
                        {{$movie['overview']}}
                    </p>    

                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            @foreach(($movie['crew']) as $crew)
                           
                            <div class="mr-8">
                             <div>{{$crew['name']}}</div>
                             <div>{{$crew['job']}}</div>
                            </div> 

                            @endforeach
                        </div>
                    </div>   
                    <div class="mt-12">
                        
                    <a href="https://youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}"
                     class="flex items-center bg-orange-500 text-gray-900 rounded font semibold px-5 
                    py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                    <svg class="w-8 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="ml-2">Ver trailer</span></a>
                    </div>
            </div>
            
        </div>
    </div>  
    <!-- end movie info-->
    

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['cast'] as $cast)
               
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{'https://image.tmdb.org/t/p/w300'.$cast['profile_path']}}" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $cast['name'] }}</a>
                            <div class="text-sm text-gray-400">
                                {{ $cast['character'] }}
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div> 

        <div class="movie-images">
            <div class="container mx-auto px-4 py-16">
                <h2 class="text-4xl font-semibold">Images</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                    @foreach ($movie['images'] as $image)
                       
                        <div class="mt-8">
                            <a href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="image1" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>

                    @endforeach
                </div>
    

@endsection