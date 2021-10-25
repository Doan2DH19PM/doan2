@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Sữa loại sản phẩm</div>
        <div class="card-body">
            <form action="{{ route('dangphim.sua', ['id' => $dangphim->id]) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="dangphim">Dạng Phim</label>
                    <input type="text" class="form-control @error('dangphim') is-invalid @enderror" id="dangphim"
                        name="dangphim" value="{{ $dangphim->dangphim }}" required />
                    @error('dangphim')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Sữa CSDL</button>
            </form>
        </div>
    </div>
@endsection
