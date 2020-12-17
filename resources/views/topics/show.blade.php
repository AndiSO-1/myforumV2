
@extends ('layout')

@section ('content')
    <h1 class="text-center p-4">{{ $topic->description }} <span class="badge rounded-pill bg-default">{{ $topic->theme->name }}</span></h1>
    <div class="small mb-3">Proposé par <span class="badge bg-primary">{{ $topic->forumuser->pseudo }}</span></div>

    @forelse ($topic->opinions as $opinion)
        <div class="p-2 ml-2">
            <span class="badge teal lighten-6">{{ $opinion->forumuser->first_name }}</span></br>
            {{ $opinion->description }}
            @if($opinion->references->count() > 0)
                <div id="accordion{{ $opinion->id }}" class="small grey-text">
                    <div class="cursor-pointer" data-toggle="collapse" data-target="#collapse{{ $opinion->id }}" aria-expanded="true" aria-controls="collapse{{ $opinion->id }}">
                        Références
                    </div>
                    <div id="collapse{{ $opinion->id }}" class="collapse" data-parent="#accordion{{ $opinion->id }}">
                        @foreach ($opinion->references as $reference)
                            <span class="badge bg-info"><a class="text-white" href="{{ $reference->url }}">{{ $reference->description }}</a></span>
                            <!-- <div class="bg-light p-1"><a href="{{ $reference->url }}">{{ $reference->description }}</a></div> -->
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    @empty
        <p>(Aucune opinion n'a été soumise pour l'instant sur ce sujet)</p>
    @endforelse
@endsection
