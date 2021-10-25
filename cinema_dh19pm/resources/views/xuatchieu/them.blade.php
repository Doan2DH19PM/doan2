@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Thêm xuất chiếu</div>
        <div class="card-body">
            <form action="{{ route('xuatchieu.them') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="xuatchieu">Xuất Chiếu</label>
                    <input type="text" class="form-control @error('xuatchieu') is-invalid @enderror"  id="xuatchieu"
                        name="xuatchieu" value="{{old('xuatchieu')}}"  />
                    @error('xuatchieu')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
