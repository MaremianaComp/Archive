<x-card>
    <x-card-body>        
        <h2 class="h6">
            <a href="{{ route('links.show', $place->id)}}">
                {{ $place->title }}             
            </a>
        </h2>
            
       {{-- <div class="small text-muted">              
                {{ $place->published_at?->diffForHumans() }}              
                {{ $place->published_at?->translatedFormat('j F Y') }}  
            </div> --}}
               
            {!! Str::limit($place['content'], 100) !!}
    </x-card-body>
</x-card>
