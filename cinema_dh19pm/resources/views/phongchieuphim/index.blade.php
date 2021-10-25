@extends('layouts.app')
@section('content')
<div class="card-header">Phòng Chiếu Phim</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('phongchieuphim.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr class="text-center">
                <th >#</th>
                <th >Tên Phòng</th>
                <th >Sửa</th>
                <th >Xóa</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($phongchieuphim as $value)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->tenphong }}</td>
                            <td ><a href="{{ route('phongchieuphim.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->tenphong }}')"><i class="bi bi-trash"></i></a></td>
                            <td ><a href="{{ route('phongchieuphim.sua',['id' => $value->id]) }}"><i class="bi bi-pencil"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
</div>


@endsection