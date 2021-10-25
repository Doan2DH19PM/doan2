@extends('layouts.app')
@section('content')
    <div class="card-header">Loại Phim</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('binhluan.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Tên Phim</th>
                    <th>Người Dùng</th>
                    <th>Nội Dung</th>
                    <th>Ngày Đăng</th>
                    <th>Kiểm Duyệt</th>
                    <th>Xóa</th>
                    <th>Sử<a href=""></a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($binhluan as $value)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $value->phim->tenphim }}</td>
                        <td>{{ $value->nguoidung->name }}</td>
                        <td>{{ $value->noidung }}</td>
                        <td>{{ date('d-m-Y', strtotime($value->ngaydang)) }}</td>
                        <td>
                            @if ($value->kiemduyet == 1)
                                <a href=""><i class="bi bi-check-lg"></i></a>
                            @else
                                <a href=""><i class="bi bi-x-circle"></i></a>
                            @endif

                        </td>
                        <td><a href="{{ route('binhluan.xoa', ['id' => $value->id]) }}"
                                onclick="confirm('Bạn có muốn xóa bình luận của {{ $value->khachhang->name }}')"><i
                                    class="bi bi-trash"></i></a></td>
                        <td><a href="{{ route('binhluan.sua', ['id' => $value->id]) }}"><i class="bi bi-pencil"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
