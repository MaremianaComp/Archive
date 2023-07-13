<x-card>
    <x-card-body>

        
             

        
        <h2 class="h6">
            <a href="{{ route('links.show', $place->id)}}">
                {{ $place->title }}             
            </a>
        </h2>
            
        {{-- <div class="small text-muted"> --}}
               {{-- {{ now()->format('d.m.Y H:i:s') }} --}}
            {{-- {{ $place->published_at?->diffForHumans() }} --}}
               {{-- {{ $place->published_at->format(' - d.m.Y') }} --}}
            {{-- {{ $place->published_at?->translatedFormat('| j F Y') }} --}}  
        {{-- </div> --}}
            
        {{-- <p> --}}
            {{-- {!! $place->content !!} --}}
            {{-- {{ Str::limit($place['content'], 20) }} --}}
            {!! Str::limit($place['content'], 100) !!}
        {{-- </p> --}}
            

           

    </x-card-body>
</x-card>