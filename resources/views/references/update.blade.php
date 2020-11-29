@extends ('layout')

@section ('content')
    <form action="?controller=Reference&action=update&id=<?= $reference->id ?>" method="post">
        <?php require("form_body.view.php") ?>
        <div class="row m-3">
            <button class="btn btn-success">Enregistrer</button>
            <a href="?controller=Reference&action=show&id=<?= $reference->id ?>" class="btn btn-primary">Annuler</a>
        </div>
    </form>
@endsection
