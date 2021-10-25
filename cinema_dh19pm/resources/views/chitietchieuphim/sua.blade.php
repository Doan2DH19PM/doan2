@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Sửa Phim</div>
        <div class="card-body">
            <form action="{{ route('chitietchieuphim.sua', ['id' => $chitietchieuphim->id]) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="ve_id">Tên Vé</label>
                    <select name="ve_id" id="ve_id"
                        class="form-control @error('ve_id') is-invalid @enderror" >
                        <option value="">--Chọn--</option>
                        @foreach ($ve as $value)
                            <option value="{{ $value->id }}" {{ ($chitietchieuphim->ve_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->tenve }}
                            </option>
                        @endforeach
                        @error('phongcp_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="phongcp_id">Tên Phòng</label>
                    <select name="phongcp_id" id="phongcp_id"
                        class="form-control @error('phongcp_id') is-invalid @enderror" required>
                        <option value="">--Chọn--</option>
                        @foreach ($phongchieuphim as $value)
                            <option value="{{ $value->id }}" {{ ($chitietchieuphim->phongcp_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->tenphong }}
                            </option>
                        @endforeach
                        @error('phongcp_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phim_id">Tên Phim</label>
                    <select name="phim_id" id="phim_id"
                        class="form-control @error('phim_id') is-invalid @enderror" required>
                        <option value="">--Chọn--</option>
                        @foreach ($phim as $value)
                            <option value="{{ $value->id }}" {{ ($chitietchieuphim->phim_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->tenphim }}
                            </option>
                        @endforeach
                        @error('phim_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>





                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button> hoặc <a href="{{ route('ghe') }} " class="btn btn-info text-center">quay về</a>   
            </form>

               
        </div>
    </div>
@endsection
