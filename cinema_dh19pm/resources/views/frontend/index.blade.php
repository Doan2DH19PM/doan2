@extends('layouts.frontend')
@section('content')
    <!--<div class="row shop_container list">-->

    @foreach ($phim as $value)
        <div class="col-md-3 shop_box"><a href="single.html">
                <img src="{{ asset('/upload/images/' . $value->hinhanh) }}" class="img-responsive" alt="" />
                <span class="new-box">
                    <span class="new-label">New</span>
                </span>
                <div class="shop_desc">
                    <h3>Tên Phim: <a href="#">{{ $value->tenphim }}</a></h3>
                    <p>Đạo Diển: {{ $value->daodien }}</p>
                    <p>Diển Viên: {{ $value->dienvien }}</p>
                    <p>Năm Sản Xuất: {{ $value->ngaysanxuat }}</p>
                    <p>Thời Gian: {{ $value->thoigian }} Phút</p>
                    <span class="actual"><i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i
                            class="bi bi-star-fill"></i></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star"></i>
                    </span><br>
                    <ul class="buttons">
                        <li class="cart"><a href="{{ route('phim.chitiet' ,['id' => $value->id]) }}">Đặt Vé</a>
            </a></li>
            <li class="shop_btn"><a href="">Tóm Tắt Phim</a></li>
            <div class="clear"> </div>
            </ul>
        </div>
        </div>

        <!--</div>-->
    @endforeach
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            {{ $phim->links() }}
        </ul>
    </nav>

@endsection
