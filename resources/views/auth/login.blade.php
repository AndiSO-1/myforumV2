@extends ('layout')

@section ('content')
    <h1 class="text-center p-5">Login</h1>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-outline mb-4">
            <label class="form-label" for="email">Email</label>
            <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="password">Mot de passe</label>
            <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="row mb-4">
            <div class="col d-flex justify-content-center">

                <div class="form-check">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        <label class="form-check-label" for="remember_me">Se souvenir de moi</label>
                    </label>
                </div>

            </div>

            <div class="col text-center">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                @endif
            </div>
            <div class="col text-center">
                <a href="{{ route('register') }}">Créer un compte</a>
            </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
    </form>
@endsection
