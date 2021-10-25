@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Thêm Bình Luận</div>
        <div class="card-body">
            <form action="{{ route('binhluan.them') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="phim_id">Phim</label>
                    <select name="phim_id" id="phim_id" class="form-control @error('phim_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($phim as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->tenphim }}
                            </option>
                        @endforeach
                        @error('phim_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="user_id">Tên Khách Hàng</label>
                    <select name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($nguoidung as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->name }}
                            </option>
                        @endforeach
                        @error('user_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="noidung">Nội Dung</label>
                    <textarea class="form-control ckeditor" name="noidung" id="noidung" cols="30" rows="10">

                            </textarea>
                    @error('noidung')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="ngaydang">Ngày Đăng</label>
                    <input type="date" class="form-control @error('ngaydang') is-invalid @enderror" id="ngaydang"
                        name="ngaydang" required />
                    @error('ngaydang')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <label class="form-label" for="ghe">Kiểm Duyệt</label>
                <div class="mb-3">
                    <input class="form-check-input-control @error('kiemduyet') is-invalid @enderror" type="radio" name="kiemduyet"
                        id="kiemduyet" value="1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Được Duyệt
                    </label>
                    @error('kiemduyet')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input class="form-check-input-control @error('kiemduyet') is-invalid @enderror" type="radio" name="kiemduyet"
                        id="kiemduyet" value="0" >
                    <label class="form-check-label" for="flexRadioDefault2">
                        Không Được Duyệt
                    </label>
                    @error('kiemduyet')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
