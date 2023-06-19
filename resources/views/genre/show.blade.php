@extends('template.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 40rem;">
                <div class="card-header">
                    <div class="card-body">
                        <h1>Genre : {{ $genre->nama }}</h1>

                        <h2>Films:</h2>

                        <ul>
                            @foreach ($genre->films as $film)
                            <li>{{ $film->judul }}</li>
                            @endforeach
                        </ul>

                        <h2>Add Film:</h2>

                        <form method="POST" action="{{ route('film.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="genre_id" value="{{ $genre->id }}">

                            <label for="judul">Judul:</label>
                            <input type="text" name="judul" id="judul">

                            <label for="ringkasan">Ringkasan:</label>
                            <input type="text" name="ringkasan" id="ringkasan">

                            <label for="tahun">Tahun:</label>
                            <input type="text" name="tahun" id="tahun">

                            <label for="poster">Poster:</label>
                            <input type="file" name="poster" id="poster">

                            <button type="submit">Add Film</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection