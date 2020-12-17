
@extends ('layout')

@section ('content')
  <h1 class="text-center p-5">{{ $theme->name }}</h1>

  <div class="list-group-flush">
      @foreach ($theme->topics as $topic)
          <a href="{{ route('topics.show',$topic->id) }}" class="list-group-item list-group-item-action">
              {{ $topic->description }} <span class="badge badge-default rounded-pill">{{ $topic->opinions->count() }}</span>
          </a>
      @endforeach
  </div>

  <div id="accordionnew">
      <button class="btn btn-primary mt-4" data-toggle="collapse" data-target="#collapsenew" aria-expanded="true" aria-controls="collapsenew">
          Ajouter un sujet
      </button>
      <div id="collapsenew" class="collapse mt-4" data-parent="#accordionnew">
          <form action="{{ route('topics.store') }}" method="post">
              @csrf
              <textarea class="form-control" name="newtop"></textarea>
              <button class="btn btn-success mt-4" type="submit">Envoyer</button>
              <input type="hidden" name="theme" value="{{ $theme->id }}">
          </form>
      </div>
  </div>
@endsection
