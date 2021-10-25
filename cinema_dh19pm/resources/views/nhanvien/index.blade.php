@extends('layouts.app')
@section('content')
<div class="card-header">Người Dùng</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('nguoidung.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr class="text-center">
                <th >#</th>
                <th >Tên</th>
                <th >Email</th>
                <th >Chức Vụ</th>
                <th >Sửa</th>
                <th >Xóa</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($nguoidung as $value)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>
                                {{ ($value->chucvu == 1) ? 'Khách Hàng' : 'Quản Lí'; }}
                            </td>
                            <td ><a href="{{ route('nguoidung.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->name }}')"><i class="bi bi-trash"></i></a></td>
                            <td ><a href="{{ route('nguoidung.sua',['id' => $value->id]) }}"><i class="bi bi-pencil"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
</div>


@endsection