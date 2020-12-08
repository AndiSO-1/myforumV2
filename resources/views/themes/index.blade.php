@extends ('layout')

@section ('content')
    <h1 class="text-center p-5">List Themes</h1>

    <table class="table table-striped">
        <thead class="bg-default text-white">
            <tr>
                <th scope="col">Description</th>
                <th class="text-right" scope="col">
                    <a href="{{ route('themes.create') }}" class="text-white"><i class="fas fa-plus fa-fw"></i></a>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($themes as $theme)
                <tr data-id="{{$theme->id}}">
                    <td>{{ $theme->name }}</td>
                    <td class="text-right text-nowrap">
                        <a class="d-none" href="{{ route('themes.show',$theme->id) }}"><i class="fas fa-pen fa-fw"></i></a>
                    </td>
                </tr>
            @empty
                <div>Aucune</div>
            @endforelse
        </tbody>
    </table>
@endsection

@push('scripts')
    <script src="js/referencelist.js" defer></script>
@endpush
