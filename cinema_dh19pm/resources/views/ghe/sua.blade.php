@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Sửa Phim</div>
        <div class="card-body">
            <form action="{{ route('ghe.sua', ['id' => $ghe->id]) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="phongcp_id">Tên Phòng</label>
                    <select name="phongcp_id" id="phongcp_id"
                        class="form-control @error('phongcp_id') is-invalid @enderror" required>
                        <option value="">--Chọn--</option>
                        @foreach ($phongchieuphim as $value)
                            <option value="{{ $value->id }}" {{ ($ghe->phongcp_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->tenphong }}
                            </option>
                        @endforeach
                        @error('phongcp_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="ghe">Ghế</label>
                    <input type="text" class="form-control @error('ghe') is-invalid @enderror" id="ghe" name="ghe"
                        required />
                    @error('ghe')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <label class="form-label" for="ghe">Tình Trạng</label>
                <div class="mb-3">
                    <input class="form-check-input-control @error('tinhtrang') is-invalid @enderror" type="radio" name="tinhtrang"
                        id="tinhtrang" value="1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Trống
                    </label>
                    @error('tinhtrang')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input class="form-check-input-control @error('tinhtrang') is-invalid @enderror" type="radio" name="tinhtrang"
                        id="tinhtrang" value="0" >
                    <label class="form-check-label" for="flexRadioDefault2">
                        Đã Đặt
                    </label>
                    @error('tinhtrang')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>




                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button> hoặc <a href="{{ route('ghe') }} " class="btn btn-info text-center">quay về</a>   
            </form>

               
        </div>
    </div>
@endsection
