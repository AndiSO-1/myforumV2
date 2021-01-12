@extends ('layout')

@section ('content')
    <h1 class="text-center p-5">Confirmer le mot de passe</h1>

    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="form-outline mb-4">
            <label class="form-label" for="password">Mot de passe</label>
            <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
        </div>

        <button type="submit" class="btn btn-primary btn-block">Confirmer</button>
    </form>

@endsection
