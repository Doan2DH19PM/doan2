@extends('layouts.app')
@section('content')
<div class="card-header">Loại Phim</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('phim.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr class="text-center">
                <th >#</th>
                <th> Dạng Phim</th>
                <th >Loại Phim</th>
                <th >Tên Phim</th>
                <th >Thời Gian</th>
                <th >Tom tắt</th>
                <th >Lượt Xem</th>
                <th >Diển Viên</th>
                <th >Quốc Gia</th>
                <th >Đạo Diển</th>
                <th >Ngày Sản Xuất</th>
                <th >Hình Ảnh</th></th>
                <th >Sửa</th>
                <th >Xóa</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($phim as $value)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->dangphim->dangphim }}</td>
                            <td>{{ $value->loaiphim->loaiphim }}</td>
                            <td>{{ $value->tenphim }}</td>
                            <td>{{ $value->thoigian }}</td>
                            <td>{{ $value->tomtat }}</td>
                            <td>{{ $value->luotxem }}</td>
                            <td>{{ $value->dienvien }}</td>
                            <td>{{ $value->quocgia }}</td>
                            <td>{{ $value->daodien }}</td>
                            <td>{{ date('d-m-Y',strtotime($value->ngaysanxuat)) }}</td>
                            <td class="text-center"><img src="{{ asset('/upload/images/'.$value->hinhanh) }}" width="80" height="80" /></td>
                            <td ><a href="{{ route('phim.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->tenphim }}')"><i class="bi bi-trash"></i></a></td>
                            <td ><a href="{{ route('phim.sua',['id' => $value->id]) }}"><i class="bi bi-pencil"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
</div>


@endsection