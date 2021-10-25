@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Thêm Phim</div>
        <div class="card-body">
            <form action="{{ route('phim.sua'  , ['id' => $phim->id])  }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="loaiphim_id">Loại Phim</label>
                    <select name="loaiphim_id" id="loaiphim_id"
                        class="form-control @error('loaiphim_id') is-invalid @enderror" required>
                        <option value="">--Chọn--</option>
                        @foreach ($loaiphim as $value)
                            <option value="{{ $value->id }}" {{ ($phim->loaiphim_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->loaiphim }}
                            </option>
                        @endforeach
                        @error('loaiphim_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="dangphim_id">Dạng Phim</label>
                    <select name="dangphim_id" id="dangphim_id"
                        class="form-control @error('dangphim_id') is-invalid @enderror" required>
                        <option value="">--Chọn--</option>
                        @foreach ($dangphim as $value)
                            <option value="{{ $value->id }}"  {{ ($phim->dangphim_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->dangphim }}
                            </option>
                        @endforeach
                        @error('dangphim_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="tenphim">Tên Phim</label>
                    <input type="text" class="form-control @error('tenphim') is-invalid @enderror" id="tenphim"
                        name="tenphim" value="{{ $phim->tenphim }}" required />
                    @error('loaiphim')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="thoigian">thời Gian : (phút)*</label>
                    <input type="text" class="form-control @error('thoigian') is-invalid @enderror" id="thoigian"
                        name="thoigian" value="{{ $phim->thoigian }}" required />
                    @error('thoigian')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="tomtat">Tóm Tắt</label>
                    <textarea class="form-control ckeditor" name="tomtat" id="tomtat" cols="30" rows="10">
                        {{ $phim->tomtat }}
                     </textarea>
                    @error('tomtat')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="luotxem">Lượt Xem</label>
                    <input type="text" class="form-control @error('luotxem') is-invalid @enderror" id="luotxem"
                        name="luotxem" value="{{ $phim->luotxem }}" required />
                    @error('luotxem')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="dienvien">Diển Viên</label>
                    <input type="text" class="form-control @error('dienvien') is-invalid @enderror" id="dienvien"
                        name="dienvien" value="{{ $phim->dienvien }}" required />
                    @error('dienvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="quocgia">Quốc Gia</label>
                    <input type="text" class="form-control @error('quocgia') is-invalid @enderror" id="quocgia"
                        name="quocgia" value="{{ $phim->quocgia }}" required />
                    @error('quocgia')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="daodien">Đạo Diển</label>
                    <input type="text" class="form-control @error('daodien') is-invalid @enderror" id="daodien"
                        name="daodien" value="{{ $phim->daodien }}" required />
                    @error('daodien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="ngaysanxuat">Ngày Sản Xuất</label>
                    <input type="date" class="form-control @error('ngaysanxuat') is-invalid @enderror" id="ngaysanxuat"
                        name="ngaysanxuat" value="{{ $phim->ngaysanxuat }}" required />
                    @error('ngaysanxuat')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="hinhanh">Hình ảnh Phim</label>
                    @if (!empty($phim->hinhanh))
                        <img class="d-block rounded" src="{{ env('APP_URL') . '/storage/app/' . $phim->hinhanh }}"
                            width="100" />
                        <span class="d-block small text-danger">Bỏ trống nếu muốn giữ nguyên ảnh cũ.</span>
                    @endif
                    <input type="file" class="form-control @error('hinhanh') is-invalid @enderror" id="hinhanh"
                        name="hinhanh" value="{{ $phim->hinhanh }}" />
                    @error('hinhanh')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror 
                </div>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
