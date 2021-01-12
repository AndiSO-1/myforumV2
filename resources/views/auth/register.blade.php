@extends ('layout')

@section ('content')

    <h1 class="text-center p-5">Créer un compte</h1>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- User Name -->
        <div class="form-outline mb-4">
            <label class="form-label" for="pseudo">Pseudo</label>
            <x-input id="pseudo" class="form-control" type="text" name="pseudo" :value="old('pseudo')" required autofocus />
        </div>

        <!-- First Name -->
        <div class="form-outline mb-4">
            <label class="form-label" for="firstname">Prénom</label>
            <x-input id="firstname" class="form-control" type="text" name="firstname" :value="old('firstname')" required autofocus />
        </div>

        <!-- Last Name -->
        <div class="form-outline mb-4">
            <label class="form-label" for="lastname">Nom</label>
            <x-input id="lastname" class="form-control" type="text" name="lastname" :value="old('lastname')" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="form-outline mb-4">
            <label class="form-label" for="email">Email</label>
            <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="form-outline mb-4">
            <label class="form-label" for="password">Mot de passe</label>
            <x-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
        </div>

        <!-- Email Address -->
        <div class="form-outline mb-4">
            <label class="form-label" for="password_confirmation">Confirmé le mot de passe</label>
            <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
        </div>

        <div class="row mb-4">
            <div class="col text-center">
                <a href="{{ route('login') }}">
                    Déjà enregistré ?
                </a>
            </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block">S'enregistrer</button>

    </form>

@endsection
