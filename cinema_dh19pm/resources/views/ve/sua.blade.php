@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Vé</div>
        <div class="card-body">
            <form action="{{ route('ve.sua', ['id' => $ve->id]) }}" method="post"  >
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="tenve">Tên Vé</label>
                    <input type="text" class="form-control @error('tenve') is-invalid @enderror" id="tenve"
                        name="tenve" value="{{ $ve->tenve }}"  />
                    @error('tenve')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phim_id">Phim</label>
                    <select name="phim_id" id="phim_id" class="form-control @error('phim_id') is-invalid @enderror" 
                        >
                        <option value="">--Chọn--</option>
                        @foreach ($phim as $value)
                            <option value="{{ $value->id }}" {{ ($ve->phim_id == $value->id) ? 'selected' : '' }}>
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
                    <select name="loaive_id" id="loaive_id" class="form-control @error('loaive_id') is-invalid @enderror" 
                        >
                        <option value="">--Chọn--</option>
                        @foreach ($loaive as $value)
                            <option value="{{ $value->id }}" {{ ($ve->loaive_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->loaive }}
                            </option>
                        @endforeach
                        @error('loaive_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>


                <div class="mb-3">
                    <label class="form-label" for="khachhang_id">Tên Khách Hàng</label>
                    <select name="khachhang_id" id="khachhang_id" class="form-control @error('khachhang_id') is-invalid @enderror"
                        >
                        <option value="">--Chọn--</option>
                        @foreach ($khachhang as $value)
                            <option value="{{ $value->id }}" {{ ($ve->khachhang_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->name }}
                            </option>
                        @endforeach
                        @error('khachhang_id')
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
                            <option value="{{ $value->id }}" {{ ($ve->phongcp_id == $value->id) ? 'selected' : '' }}>
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
                    <select name="ghe_id" id="ghe_id" class="form-control  @error('ghe_id') is-invalid @enderror" 
                        >
                        <option value="">--Chọn--</option>
                        @foreach ($ghe as $value)
                            <option value="{{ $value->id }}"  {{ ($ve->ghe_id == $value->id) ? 'selected' : '' }} >
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
                        name="tongsoghe" value="{{ $ve->tongsoghe }}"  />
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
                            <option value="{{ $value->id }}"  {{ ($ve->xuatchieu_id == $value->id) ? 'selected' : '' }}>
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
