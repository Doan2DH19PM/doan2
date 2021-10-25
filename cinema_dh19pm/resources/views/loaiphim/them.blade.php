@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Thêm loại Phim</div>
        <div class="card-body">
            <form action="{{ route('loaiphim.them') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="dangphim">Loại Phim</label>
                    <input type="text" class="form-control @error('loaiphim') is-invalid @enderror" loaiphim id="loaiphim"
                        name="loaiphim" value="{{old('loaiphim')}}"  />
                    @error('loaiphim')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
