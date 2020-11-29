@extends ('layout')

@section ('content')
    <div class="row">
        <div class="bg-light col-2 border border-dark">Titre:</div>
        <div class="col-10">{{ $reference->description }}</div>
    </div>
    <div class="row">
        <div class="bg-light col-2 border border-dark">URL:</div>
        <div class="col-10">{{ $reference->url }}</div>
    </div>
    <div class="row m-3">
        <a href="#" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger">Supprimer</a>
        <a href="{{ route('references.edit',$reference->id) }}" class="btn btn-primary">Modifier</a>
    </div>
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-center">
                    Sûr et certain ???
                </div>
                <div class="modal-footer flex-row justify-content-center">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <form action="{{ route('references.destroy',$reference->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-ok">Confirmer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
