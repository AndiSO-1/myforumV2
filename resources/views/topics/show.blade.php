
@extends ('layout')

@section ('content')
    <h1 class="text-center p-4">{{ $topic->description }} <span class="badge rounded-pill bg-default">{{ $topic->theme->name }}</span></h1>
    <div class="mb-3">Proposé par <span class="badge bg-primary">{{ $topic->user->pseudo }}</span></div>

    @forelse ($topic->opinions as $opinion)
        <div class="p-2 ml-2 mb-3 border rounded">

            <span class="badge teal lighten-6">{{ $opinion->user->first_name }}</span></br>
            {{ $opinion->description }}
            @if($opinion->references->count() > 0)
                <div id="accordion{{ $opinion->id }}" class="small grey-text">
                    <div class="cursor-pointer" data-toggle="collapse" data-target="#collapse{{ $opinion->id }}" aria-expanded="true" aria-controls="collapse{{ $opinion->id }}">
                        Références
                    </div>
                    <div id="collapse{{ $opinion->id }}" class="collapse" data-parent="#accordion{{ $opinion->id }}">
                        @foreach ($opinion->references as $reference)
                            <span class="badge bg-info"><a class="text-white" href="{{ $reference->url }}">{{ $reference->description }}</a></span>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- display comments -->
            @if ($opinion->comments->count() > 0)
                <div class="border-top mt-2 pt-2">
                    @foreach ($opinion->comments as $comment)
                        <div class="mb-1">
                            <span class="badge deep-orange">{{ $comment->pseudo }}</span></br>
                            {{ $comment->pivot->comment }}
                            <!-- display green points or red points -->
                            @if ($comment->pivot->points > 0)
                                <span class="badge green">{{ $comment->pivot->points }}</span>
                            @else
                                <span class="badge red">{{ $comment->pivot->points }}</span>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
            @if (Auth::user()->can('comment',\App\Models\Opinion::class) || Auth::user()->can('commentOpinion',$opinion,\App\Models\Opinion::class))
                <div class="border-top mt-2 pt-3">
                    <!-- Form to add a comment -->
                    <form method="POST" action="{{ route('opinions.comment') }}">
                        @csrf

                        <!-- id caché de l'opinion -->
                        <input type="hidden" name="opinionid" value="{{ $opinion->id }}">

                        <div class="row mb-4">
                            <div class="col">
                                <!-- Commentaire -->
                                <div class="form-outline">
                                    <input class="form-control" type="text" name="newcomment" :value="old('comment')" placeholder="Commentaire" required autofocus />
                                </div>
                            </div>
                            <div class="col">
                                <!-- Points -->
                                <div class="form-outline">
                                    <input class="form-control" type="number" min="-1" max="1" name="newpoints" :value="old('points')"  placeholder="Points" required autofocus />
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-orange btn-block lighten-3">Commenter</button>
                    </form>
                </div>
            @endif
            @cannot('comment',\App\Models\Opinion::class)
                <div class="border-top mt-2 pt-3">
                    Vous n'avez pas postez suffisament d'opinions!  ({{ Auth::user()->opinions->count() }}) pour être autorisé à commenter des opinions où vous n'êtes pas nommément cité
                </div>
            @endcannot

        </div>
    @empty
        <p>(Aucune opinion n'a été soumise pour l'instant sur ce sujet)</p>
    @endforelse
@endsection
