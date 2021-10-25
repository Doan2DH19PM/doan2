@extends('layouts.app')
@section('content')
<div class="card-header">Ghế</div>
    <div class="card-body table-responsive">
        
        <p><a href="{{ route('ghe.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
        
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr class="text-center">
                <th >#</th>
                <th> Tên phòng</th>
                <th >Ghế</th>
                <th >Tình Trạng</th>
                <th >Sửa</th>
                <th >Xóa</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($ghe as $value)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->phongchieuphim->tenphong }}</td>
                            <td>{{ $value->ghe }}</td>
                            <td>
                                @if ($value->tinhtrang == 1)
                                     <a href=""><i class="bi bi-check-lg"></i></a>
                                @else
                                    <a href=""><i class="bi bi-x-circle"></i></a>
                                @endif
                            </td>
                            <td ><a href="{{ route('ghe.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->ghe }}')"><i class="bi bi-trash"></i></a></td>
                            <td ><a href="{{ route('ghe.sua',['id' => $value->id]) }}"><i class="bi bi-pencil"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
</div>


@endsection