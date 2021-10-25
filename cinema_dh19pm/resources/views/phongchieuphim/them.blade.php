@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Thêm Phòng Chiếu Phim</div>
        <div class="card-body">
            <form action="{{ route('phongchieuphim.them') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="tenphong">Tên Phòng</label>
                    <input type="text" class="form-control @error('tenphong') is-invalid @enderror"  id="tenphong"
                        name="tenphong" required />
                    @error('tenphong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
