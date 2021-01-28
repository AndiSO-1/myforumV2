@extends ('layout')

@section ('content')
    <h1 class="text-center p-5">List Utilisateurs</h1>

    <table class="table table-striped">
        <thead class="bg-default text-white">
            <tr>
                <th scope="col">Pseudo</th>
                <th scope="col">Role</th>
                @if ($nbAdmin < 5)
                    <th scope="col"></th>
                @endif
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr data-id="{{$user->id}}">
                    <td>{{ $user->pseudo }}</td>
                    <td>{{ $user->role->name }} </td>
                    @if (Auth::user()->id !== $user->id && $nbAdmin < 5)
                        @if ($user->role->slug !== 'ADMI')
                            <td>
                                <form action="{{ route('users.setAdmin') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Nommer admin</button>
                                    <input type="hidden" name="userid" value="{{ $user->id }}">
                                </form>
                            </td>
                        @else
                            <td>
                                <form action="{{ route('users.setStud') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Déstituer</button>
                                    <input type="hidden" name="userid" value="{{ $user->id }}">
                                </form>
                            </td>
                        @endif
                    @endif
                </tr>
            @empty
                <div>Aucun utilisateur trouvé</div>
            @endforelse
        </tbody>
    </table>
@endsection
