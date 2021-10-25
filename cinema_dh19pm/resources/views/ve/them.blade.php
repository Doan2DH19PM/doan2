@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Vé</div>
        <div class="card-body">
            <form action="{{ route('ve.them') }}" method="post"  >
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="tenve">Tên Vé</label>
                    <input type="text" class="form-control @error('tenve') is-invalid @enderror" id="tenve"
                        name="tenve"  />
                    @error('ngaytenvebanve')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phim_id">Phim</label>
                    <select name="phim_id" id="phim_id" class="form-control @error('phim_id') is-invalid @enderror"
                        >
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
                    <label class="form-label" for="loaive_id">Loại Vé</label>
                    <select name="loaive_id" id="loaive_id" class="form-control @error('loaive_id') is-invalid @enderror" value="{{ old('$loaive->loaive') }}"
                        >
                        <option value="">--Chọn--</option>
                        @foreach ($loaive as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->loaive }}
                            </option>
                        @endforeach
                        @error('loaive_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="user_id">Tên Khách Hàng</label>
                    <select name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror"
                        >
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
                    <label class="form-label" for="phongcp_id">Phòng Chiếu Phiêm</label>
                    <select name="phongcp_id" id="phongcp_id" class="form-control  @error('phongcp_id') is-invalid @enderror" 
                        >
                        <option value="">--Chọn--</option>
                        @foreach ($phongchieuphim as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->tenphong }}
                            </option>
                        @endforeach
                        @error('phongcp_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="ghe_id">Vị Trí Ghế</label>
                    <select name="ghe_id"   id="ghe_id" class="form-control js-example-basic-multiple  @error('ghe_id') is-invalid @enderror" 
                        >
                        <option value="">--Chọn--</option>
                        @foreach ($ghe as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->ghe }}
                            </option>
                        @endforeach
                        @error('ghe_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="tongsoghe">Tổng Số Ghế</label>
                    <input type="number" class="form-control @error('tongsoghe') is-invalid @enderror" id="tongsoghe"
                        name="tongsoghe"  />
                    @error('tongsoghe')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="xuatchieu_id">Xuất Chiếu</label>
                    <select name="xuatchieu_id" id="xuatchieu_id" class="form-control @error('xuatchieu_id') is-invalid @enderror"
                        >
                        <option value="">--Chọn--</option>
                        @foreach ($xuatchieu as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->xuatchieu }}
                            </option>
                        @endforeach
                        @error('xuatchieu_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="ngaybanve">Ngày Bán Vé</label>
                    <input type="date" class="form-control @error('ngaybanve') is-invalid @enderror" id="ngaybanve"
                        name="ngaybanve"  />
                    @error('ngaybanve')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
