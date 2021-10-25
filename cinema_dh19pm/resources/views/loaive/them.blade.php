@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Thêm loại Vé</div>
        <div class="card-body">
            <form action="{{ route('loaive.them') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="loaive">Loại Vé</label>
                    <input type="text" class="form-control @error('loaive') is-invalid @enderror" loaiphim id="loaive"
                        name="loaive" value="{{ old('loaive') }}" />
                    @error('loaive')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="dongia">Đơn Giá</label>
                    <input type="number" class="form-control @error('dongia') is-invalid @enderror"  id="dongia"
                        name="dongia"  />
                    @error('dongia')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
