@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Sữa loại phim</div>
        <div class="card-body">
            <form action="{{ route('loaiphim.sua', ['id' => $loaiphim->id]) }}) }}" method="post">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="dangphim">Loại Phim</label>
                    <input type="text" class="form-control @error('loaiphim') is-invalid @enderror" id="loaiphim"
                        name="loaiphim" value="{{ $loaiphim->loaiphim }}" required />
                    @error('loaiphim')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
