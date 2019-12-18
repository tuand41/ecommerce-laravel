@extends('client.master')
@section('title','Chi tiết sản phẩm')
@section('main')
<div class="col-xs-12 col-md-9 ">
    <ul class="breadcrumb" style="margin-top: 20px">
        <li><a href="{{ asset('/') }}">Home</a></li>
        <li>
            <a href="{{ asset('danhmuc/'.$danhmuc1->id_danhmuc.'/'.$danhmuc1->slug_danhmuc.'.html') }}">{{ $danhmuc1->ten_danhmuc }}
            </a>
        </li>
        <li class="active">{{ $sanpham1->ten_sp }}</li>
    </ul>
    <div class="panel panel-default">
        <div class="panel-heading">{{ $sanpham1->ten_sp }}</div>
        <div class="panel-body">
            <div class="sanpham">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/app/avatar/'.$sanpham1->img_sp) }}" width="100%">
                    </div>
                    <div class="col-md-5">
                        <p>Giá: {{ number_format($sanpham1->gia_sp,0,',','.') }} đ</p>
                        <p>Phụ kiện : {{ $sanpham1->phukien }}</p>
                        <p>Tình trạng : {{ $sanpham1->tinhtrang }}</p>
                        <p>Khuyến mại : {{ $sanpham1->khuyenmai }}</p>
                        <p>Bảo hành: {{ $sanpham1->baohanh }}</p>
                        <p>Trạng thái :
                            @if ($sanpham1->status==1)
                            {{-- expr --}}
                            Còn hàng
                            @else
                            Hết hàng
                            @endif
                        </p>
                        <div class="row" style="margin-left: 1px">
                            <a href="{{ asset('giohang/them/'.$sanpham1->id_sp) }}" class="btn btn-primary"
                                role="button">Mua ngay</a>
                            <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Thông số
                            </button>
                        </div>
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Thông số kĩ thuật</h4>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th width="40%">Hệ điều hành</th>
                                                    <td>{{ $sanpham1->hdh }}</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th width="40%">Màn hình</th>
                                                    <td>{{ $sanpham1->manhinh }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="40%">Camera trước</th>
                                                    <td>{{ $sanpham1->camtrc }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="40%">Camera sau</th>
                                                    <td>{{ $sanpham1->camsau }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="40%">Cpu</th>
                                                    <td>{{ $sanpham1->cpu }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="40%">Ram</th>
                                                    <td>{{ $sanpham1->ram }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="40%">Bộ nhớ trong</th>
                                                    <td>{{ $sanpham1->rom }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Thẻ nhớ</th>
                                                    <td>{{ $sanpham1->thenho }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">thẻ sim</th>
                                                    <td>{{ $sanpham1->thesim }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chitietsp" style="margin-top: 30px">
                <h3>Chi tiết sản phẩm</h3>
                </p>
                <div class="chitietspNd text-justify">
                    {!! $sanpham1->mieuta !!}
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default ">
        <div class="panel-heading">
            Bình Luận
        </div>
        <div class="panel-body">
            <div class="row">
                <form method="post" class="col-md-12">
                    {{ csrf_field() }}
                    <div class="form-group">
                        @if(Auth::check())
                        <label>Bình luận:</label>
                        <textarea required rows="5" class="form-control" name="contents"></textarea>
                        <input type="submit" name="submit" value="Gửi" class="form-control btn btn-primary">
                        @else
                        <h2>bạn phải đăng nhập</h2>
                        @endif
                    </div>
                </form>

            </div>
            <hr>
            <div class="row">
                <div class="comment" style="margin-left: 15px">
                    @foreach ($comments as $com)
                    {{-- expr --}}
                    <div class="media">
                        <div class="media-left me">
                            <img src="images/img_avatar1.png" class="media-object" style="width:60px">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{ $com->com_name }}</h4>
                            <span>{{ $com->com_email }}</span>
                            <span style="color: #999">{{ date('d/m/Y H:i',strtotime($com->created_at)) }}</span>
                            <p>{{ $com->com_noidung }}</p>
                        </div>
                    </div>
                    <hr>
                    @endforeach

                    <div class="col-md-offset-3">
                        {{ $comments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- /.col-xs-12.col-md-3.center -->
@stop
