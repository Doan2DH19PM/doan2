@extends('layouts.app')
@section('content')
<div class="card-header">Loại Phim</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('ve.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr class="text-center">
                <th>#</th>
                <th>Tên Vé</th>
                <th>Loại Vé</th>
                <th>Tên Phim</th>
                <th>Khách Hàng</th>
                <th>Phòng Chiếu Phim</th>
                <th>Vị Trí Ghế</th>
                <th>Tổng Số Ghế</th>
                <th>Thành Tiền</th>
                <th>Xuất Chiếu</th>
                <th>Ngày Bán Vé</th>
                <th >Sửa</th>
                <th >Xóa</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $tongtien = 0;
                    @endphp
                    @foreach ($ve as $value)
                    @php
                        $tongtien = $value->loaive->dongia * $value->tongsoghe; 
                    @endphp
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->tenve }}</td>
                            <td>{{ $value->loaive->loaive }}</td>
                            <td>{{ $value->phim->tenphim }}</td>
                            <td>{{ $value->nguoidung->name }}</td>
                            <td>{{ $value->phongchieuphim->tenphong }}</td>
                            <td>{{ $value->ghe->ghe }}</td>
                            <td>{{ $value->tongsoghe }}</td>
                            <td>{{ number_format($tongtien) }} VND</td>
                            <td>{{ $value->xuatchieu->xuatchieu }}</td>
                            <td>{{ date('d-m-Y',strtotime($value->ngaybanve)) }}</td>
                            <td ><a href="{{ route('ve.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->tenphim }}')"><i class="bi bi-trash"></i></a></td>
                            <td ><a href="{{ route('ve.sua',['id' => $value->id]) }}"><i class="bi bi-pencil"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
</div>


@endsection