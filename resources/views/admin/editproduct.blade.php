@extends('admin.master')
@section('title',' Sữa Sản phẩm')
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
                    <div class="panel-heading">Sửa sản phẩm</div>
                    <div class="panel-body">
                        @include('errors.note')
                        <form method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input required type="text" value="{{ $sanpham->ten_sp }}" name="name"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>
                                        <input required type="number" value="{{ $sanpham->gia_sp }}" name="price"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm</label>
                                        <input id="img" type="file" name="img" class="form-control hidden"
                                               onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="300px"
                                             src="{{ asset('storage/app/avatar/'.$sanpham->img_sp) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Phụ kiện</label>
                                        <input required type="text" value="{{ $sanpham->phukien }}" name="accessories"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Bảo hành</label>
                                        <input required type="text" value="{{ $sanpham->baohanh }}" name="warranty"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Khuyến mãi</label>
                                        <input required type="text" value="{{ $sanpham->khuyenmai }}" name="promotion"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tình trạng</label>
                                        <input required type="text" value="{{ $sanpham->tinhtrang }}" name="condition"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select required name="status" class="form-control">
                                            <option value="1"
                                                    @if ($sanpham->status==1)
                                                    {{-- expr --}}
                                                    selected
                                                    @endif>
                                                Còn Hàng
                                            </option>
                                            <option value="0"
                                                    @if ($sanpham->status==0)
                                                    {{-- expr --}}
                                                    selected
                                                    @endif>
                                                Hết hàng
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Miêu tả</label>
                                        <textarea class="ckeditor" required
                                                  name="description">{{ $sanpham->mieuta }}</textarea>
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
                                            @foreach ($danhmuc as $dm)
                                                {{-- expr --}}
                                                <option value="{{ $dm->id_danhmuc }}"
                                                        @if ($sanpham->sp_danhmuc == $dm->id_danhmuc)
                                                        {{-- expr --}}
                                                        selected
                                                        @endif>
                                                    {{ $dm->ten_danhmuc }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Sản phẩm nổi bật</label><br>
                                        Có: <input type="radio" name="featured" value="1" @if ($sanpham->sp_noibat == 1)
                                        checked
                                                @endif>
                                        Không: <input type="radio" name="featured" value="0"
                                                      @if ($sanpham->sp_noibat == 0)
                                                      checked
                                                @endif>
                                    </div>
                                    <div class="form-group">
                                        <label>Màn hình</label>
                                        <input required type="text" value="{{ $sanpham->manhinh }}" name="manhinh"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Hệ điều hành</label>
                                        <input required type="text" value="{{ $sanpham->hdh }} " name="hdh"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Camera trước</label>
                                        <input required type="text" value="{{ $sanpham->camtrc }}" name="camtrc"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Camera sau</label>
                                        <input required type="text" value="{{ $sanpham->camsau }}" name="camsau"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>CPU</label>
                                        <input required type="text" value="{{ $sanpham->cpu }}" name="cpu"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Ram</label>
                                        <input required type="text" value="{{ $sanpham->ram }}" name="ram"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Bộ nhớ trong</label>
                                        <input required type="text" value="{{ $sanpham->rom }}" name="rom"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Thẻ nhớ</label>
                                        <input required type="text" value="{{ $sanpham->thenho }}" name="thenho"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Thẻ sim</label>
                                        <input required type="text" value="{{ $sanpham->thesim }}" name="thesim"
                                               class="form-control">
                                    </div>
                                    <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
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