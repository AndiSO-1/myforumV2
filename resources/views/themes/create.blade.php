@extends ('layout')

@section ('content')
    <form action="{{ route('themes.store') }}" method="post">
        @csrf
        @include('themes.form_body')
        <div class="row m-3">
            <button class="btn btn-success">Enregistrer</button>
            <a href="{{ url()->previous() }}" class="btn btn-primary">Annuler</a>
        </div>
    </form>
@endsection
