@extends ('layout')

@section ('content')
    <form action="{{ route('themes.update',$theme->id) }}" method="post">
        @method('PUT')
        @csrf
        @include('themes.form_body')
        <div class="row m-3">
            <button class="btn btn-success">Enregistrer</button>
            <a href="{{ url()->previous() }}" class="btn btn-primary">Annuler</a>
        </div>
    </form>
@endsection
