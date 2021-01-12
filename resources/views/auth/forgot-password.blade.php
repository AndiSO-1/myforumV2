@extends ('layout')

@section ('content')
    <h1 class="text-center p-5">Mot de passe oublié</h1>

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-outline mb-4">
            <label class="form-label" for="email">Email</label>
            <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <button type="submit" class="btn btn-primary btn-block">Confirmer</button>
    </form>

@endsection
