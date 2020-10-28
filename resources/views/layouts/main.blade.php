<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js" defer></script>  
</head>
<body class="font-sans bg-purple-900 text-white">
    <nav class="border-b border-gray-800">         
       <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
           <ul class="flex flex-col md:flex-row items-center">
                <li>
                <a href="#">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="50" height="50" viewBox="0 0 25 25" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
              </svg></a>
            </li>
            <li class="md:mr-16"><a href="{{route('movies.index')}}">laravel Movies</a></li>
            <li class="md:ml-16">
                <a href="#" class="hover:text-gray-300">peliculas</a>
            </li>  
            <li class="md:ml-6">
                <a href="#" class="hover:text-gray-300">Tv shows</a>
            </li>  
            <li class="md:ml-6">
                <a href="#" class="hover:text-gray-300">Actors</a>
            </li>    
           </ul>
           <div class="flex flex-col md:flex-row items-center">
            <livewire:search-dropdown>
           
            </div>
   
           </div>
       </div>
    </nav>
    @yield('content')
    @livewireScripts 
    
</body>
