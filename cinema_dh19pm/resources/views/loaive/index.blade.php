@extends('layouts.app')
@section('content')
<div class="card-header">Loại Vé</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('loaive.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr class="text-center">
                <th >#</th>
                <th >Loại Vé</th>
                <th>Đơn Giá</th>
                <th >Sửa</th>
                <th >Xóa</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($loaive as $value)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->loaive }}</td>
                            <td>{{ number_format($value->dongia) }} VND</td>
                            <td ><a href="{{ route('loaive.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->loaive }}')"><i class="bi bi-trash"></i></a></td>
                            <td ><a href="{{ route('loaive.sua',['id' => $value->id]) }}"><i class="bi bi-pencil"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
</div>


@endsection