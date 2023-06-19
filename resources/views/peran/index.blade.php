@extends('template.index')

@section('content')
    <h1>Daftar Peran</h1>

    <ul>
        @foreach ($peran as $p)
            <li>
                <strong>{{ $p->nama }}</strong>
                <ul>
                    @foreach ($p->casts as $cast)
                        <li>{{ $cast->nama }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
