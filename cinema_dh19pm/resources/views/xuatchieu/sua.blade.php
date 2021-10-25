@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Sữa loại phim</div>
        <div class="card-body">
            <form action="{{ route('xuatchieu.sua', ['id' => $xuatchieu->id]) }}) }}" method="post">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="xuatchieu">Loại Phim</label>
                    <input type="text" class="form-control @error('xuatchieu') is-invalid @enderror" id="xuatchieu"
                        name="xuatchieu" value="{{ $xuatchieu->xuatchieu }}" required />
                    @error('xuatchieu')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
