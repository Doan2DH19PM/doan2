@extends('layouts.app')
@section('content')
<div class="card-header">Loại Phim</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('loaiphim.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr class="text-center">
                <th >#</th>
                <th >Loại Phim</th>
                <th >Sửa</th>
                <th >Xóa</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($loaiphim as $value)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->loaiphim }}</td>
                            <td ><a href="{{ route('loaiphim.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->loaiphim }}')"><i class="bi bi-trash"></i></a></td>
                            <td ><a href="{{ route('loaiphim.sua',['id' => $value->id]) }}"><i class="bi bi-pencil"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
</div>


@endsection