@extends('layouts.app')
@section('content')
<div class="card-header">Xuất Chiếu</div>
    <div class="card-body table-responsive">
        <p><a href="{{ route('xuatchieu.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr class="text-center">
                <th>#</th>
                <th>Xuất</th>
                <th>Sửa</th>
                <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($xuatchieu as $value)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->xuatchieu }}</td>
                            <td ><a href="{{ route('xuatchieu.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->xuatchieu }}')"><i class="bi bi-trash"></i></a></td>
                            <td ><a href="{{ route('xuatchieu.sua',['id' => $value->id]) }}"><i class="bi bi-pencil"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
</div>


@endsection