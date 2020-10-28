<div>
    <div class="relative mt-3 md:mt-0" x-data="{ isOpen:true }"  @click.away="isOpen = false">
          <input wire:model="search" type="text" class="bg-gray-800 rounded-full w-64 pl-8 px-3 py-2
        focus:outline-none focus:shadow-outline" placeholder="Search">
        <div class="absolute top-0">
         <svg class=" fill-current text-gray-500 w-4 mt-3 ml-2"
         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>
    </div>
    @if(strlen($search)>2)
    <div class="absolute bg-gray-800 rounded text-sm w-64 mt-2" x-show="isOpen"
    @keydown.escape.window="isOpen=false">
    @if(count($searchResults)>0)    
       <ul>
           @foreach($searchResults as $result)
           <li class="border-b border-gray-700">
               <a href="{{route('movies.show',$result['id'])}}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                <img src="{{'https://image.tmdb.org/t/p/w92'.$result['poster_path']}}"alt="poster">
                <span class="ml-4"> {{$result['title']}}</span></a>
           </li>
           @endforeach
        </ul>   
    @else
         <div class="px-3 py-3">No results for "{{$search}}"</div>
    @endif
    </div>
</div>
    @endif
