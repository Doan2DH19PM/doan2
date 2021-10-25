@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Sữa phòng chiếu phim</div>
        <div class="card-body">
            <form action="{{ route('phongchieuphim.sua', ['id' => $phongchieuphim->id]) }}) }}" method="post">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="tenphong">Phòng Chiếu Phim</label>
                    <input type="text" class="form-control @error('tenphong') is-invalid @enderror" id="tenphong"
                        name="tenphong" value="{{ $phongchieuphim->tenphong }}" required />
                    @error('tenphong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
