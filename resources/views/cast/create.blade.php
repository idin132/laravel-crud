@extends('template.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 40rem;">
                <div class="card-header">
                    <div class="card-body">
                        <form action="{{ route('cast.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="nama">{{ __('Nama') }}</label>
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="umur">{{ __('Umur') }}</label>
                                        <input type="text" class="form-control" name="umur" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="bio">{{ __('Bio') }}</label>
                                        <input type="text" class="form-control" name="bio" required>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <a href="{{ route('cast.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection