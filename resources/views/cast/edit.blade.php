@extends('template.index')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-header">
                <div class="card-header" style="background-color: white;">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h3>EDIT</h3>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('cast.update', $cast->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ $cast->nama }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="umur" class="col-md-4 col-form-label text-md-end">{{ __('Umur') }}</label>

                            <div class="col-md-6">
                                <input id="umur" type="text" class="form-control" name="umur" value="{{ $cast->umur }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bio" class="col-md-4 col-form-label text-md-end">{{ __('Bio') }}</label>

                            <div class="col-md-6">
                                <input id="bio" type="text" class="form-control" name="bio" value="{{ $cast->bio }}" required>
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                                <a href="{{ route('cast.index')}}" class="btn btn-primary">Kembali</a>

                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection