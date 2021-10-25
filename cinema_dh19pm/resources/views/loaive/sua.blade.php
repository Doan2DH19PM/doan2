@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Sữa loại Vé</div>
        <div class="card-body">
            <form action="{{ route('loaive.sua', ['id' => $loaive->id]) }}) }}" method="post">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="loaive">Loại Vé</label>
                    <input type="text" class="form-control @error('loaive') is-invalid @enderror" id="loaive"
                        name="loaive" value="{{ $loaive->loaive }}"  />
                    @error('loaive')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="dongia">Đơn Giá</label>
                    <input type="number" class="form-control @error('dongia') is-invalid @enderror"  id="dongia"
                        name="dongia" value="{{ $loaive->dongia }}"  />
                    @error('dongia')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
