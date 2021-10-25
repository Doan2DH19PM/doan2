@extends('layouts.app')
@section('content')
<div class="card-header">Dạng Phim</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('dangphim.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr class="text-center">
                <th >#</th>
                <th >Dạng Phim</th>
                <th >Sửa</th>
                <th >Xóa</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($dangphim as $value)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->dangphim }}</td>
                            <td ><a href="{{ route('dangphim.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->dangphim }}')"><i class="bi bi-trash"></i></a></td>
                            <td ><a href="{{ route('dangphim.sua',['id' => $value->id]) }}"><i class="bi bi-pencil"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
</div>


@endsection