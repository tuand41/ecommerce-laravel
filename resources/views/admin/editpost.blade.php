@extends('admin.master')
@section('title','Chỉnh sửa bài viết')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Bài viết</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Chỉnh sửa Bài viết</div>
                <div class="panel-body">
                    @include('errors.note')
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Tên Bài viết</label>
                                    <input type="text" name="name" value="{{ $post->name }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ảnh bài viết</label>
                                    <input id="img" type="file" name="img" class="form-control hidden"
                                           onchange="changeImg(this)">
                                    <img id="avatar" class="thumbnail" width="300px"
                                         src="{{ asset('storage/app/post/'.$post->img) }}">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <input required type="text" value="{{ $post->description }}" name="description"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Miêu tả</label>
                                    <textarea class="ckeditor" required name="content">{{ $post->content }}</textarea>
                                    <script type="text/javascript">
                                        var editor = CKEDITOR.replace('content', {
                                                language: 'vi',
                                                filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
                                                filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
                                                filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                            });
                                    </script>

                                </div>
                                <div class="form-group">
                                    <label>Sản phẩm</label>
                                    <select required name="product" class="form-control">
                                        @foreach ($product as $pr)
                                        {{-- expr --}}
                                        <option value="{{ $pr->id_sp }}" @if ($post->product_id == $pr->id_sp)
                                            {{-- expr --}}
                                            selected
                                            @endif>
                                            {{ $pr->ten_sp }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="submit" name="submit" value="Thay doi" class="btn btn-primary">
                                <a href="{{ asset('admin/post') }}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->
@stop
