@extends ('layout')

@section ('content')
    <h1 class="text-center p-5">Réferences</h1>
    @forelse ($references as $reference)
        <div class="row text-center divtitle" data-id="{{$reference->id}}">
            <div class="col-2 text-right">
                <div id="divIcons{{$reference->id}}" class="d-none">
                    <a class="blacklink m-2" href="{{ $reference->url }}"><i class="fas fa-eye"></i></a>
                    <a class="blacklink m-2" href="{{ route('references.show',$reference->id) }}"><i class="fas fa-search-plus"></i></a>
                </div>
            </div>
            <div class="col-10 text-left">
                {{ $reference->description }}
            </div>
        </div>
    @empty
        <div>Aucune</div>
    @endforelse
    <div class="row m-3">
        <a href="{{ route('references.create') }}" class="btn btn-primary">Ajouter</a>
    </div>
@endsection

@push('scripts')
    <script src="js/referencelist.js" defer></script>
@endpush
