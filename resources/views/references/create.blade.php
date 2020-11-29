@extends ('layout')

@section ('content')
    <form action="{{ route('references.store') }}" method="post">
        @csrf
        @include('references.form_body')
        <div class="row m-3">
            <button class="btn btn-success">Enregistrer</button>
            <a href="{{ url()->previous() }}" class="btn btn-primary">Annuler</a>
        </div>
    </form>
@endsection
