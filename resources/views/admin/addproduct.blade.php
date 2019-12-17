@extends('admin.master')
@section('title','Thêm Sản phẩm')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Thêm sản phẩm</div>
                    <div class="panel-body">
                        @include('errors.note')
                        <form method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input required type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>
                                        <input required type="number" name="price" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm</label>
                                        <input required id="img" type="file" name="img" class="form-control hidden"
                                               onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
                                    </div>
                                    <div class="form-group">
                                        <label>Phụ kiện</label>
                                        <input required type="text" value="Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng" name="accessories" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Bảo hành</label>
                                        <input required type="text" value="Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi" name="warranty"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Khuyến mãi</label>
                                        <input required type="text" value="Phiếu mua hàng trị giá 400.000đ " name="promotion"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tình trạng</label>
                                        <input required type="text" value="Máy mới 100%" name="condition"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select required name="status" class="form-control">
                                            <option value="1">Còn hàng</option>
                                            <option value="0">Hết hàng</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Miêu tả</label>
                                        <textarea class="ckeditor" required name="description"></textarea>
                                        <script type="text/javascript">
                                            var editor = CKEDITOR.replace('description', {
                                                language: 'vi',
                                                filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
                                                filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
                                                filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                            });
                                        </script>

                                    </div>
                                    <div class="form-group">
                                        <label>Danh mục</label>
                                        <select required name="cate" class="form-control">
                                            @foreach ($listdanhmuc as $danhmuc)
                                                {{-- expr --}}
                                                <option value="{{ $danhmuc->id_danhmuc}}">{{ $danhmuc->ten_danhmuc }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Sản phẩm nổi bật</label><br>
                                        Có: <input type="radio" name="featured" value="1">
                                        Không: <input type="radio" name="featured" value="0">
                                    </div>
                                    <div class="form-group">
                                        <label>Màn hình</label>
                                        <input required type="text" value="LCD" name="manhinh" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Hệ điều hành</label>
                                        <input required type="text" value="Android " name="hdh" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Camera trước</label>
                                        <input required type="text" value="25 MP" name="camtrc" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Camera sau</label>
                                        <input required type="text" value="Chính 25 MP & Phụ 8 MP, 5 MP" name="camsau" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>CPU</label>
                                        <input required type="text" value="" name="cpu" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Ram</label>
                                        <input required type="text" value="GB" name="ram" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Bộ nhớ trong</label>
                                        <input required type="text" value="GB" name="rom" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Thẻ nhớ</label>
                                        <input required type="text" value="MicroSD, hỗ trợ tối đa 512 GB" name="thenho" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Thẻ sim</label>
                                        <input required type="text" value="2 Nano SIM, Hỗ trợ 4G" name="thesim" class="form-control">
                                    </div>
                                    <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                    <a href="{{ asset('admin/sanpham') }}" class="btn btn-danger">Hủy bỏ</a>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>    <!--/.main-->
@stop	
