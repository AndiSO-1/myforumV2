@extends ('layout')

@section ('content')
    <h1 class="text-center p-5">Themes</h1>

    <div class="list-group-flush">
        @foreach ($themes as $theme)
            <a href="{{ route('themes.show',$theme->id) }}" class="list-group-item list-group-item-action">
                {{ $theme->name }} <span class="badge badge-default rounded-pill">{{ $theme->topics->count() }}</span>
            </a>
        @endforeach
    </div>
@endsection
