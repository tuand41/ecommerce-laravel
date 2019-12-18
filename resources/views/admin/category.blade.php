@extends('admin.master')
@section('title','Danh mục')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh mục sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Thêm danh mục
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên danh mục:</label>
                            <input required type="text" name="name" class="form-control" placeholder="Tên danh mục...">
                            <input type="submit" name="submit" value="Thêm" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-7 col-lg-7">
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách danh mục</div>
                <div class="panel-body">
                    @include('errors.noti')
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-primary">
                                    <th>Tên danh mục</th>
                                    <th style="width:30%">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listdm as $danhmuc)
                                <tr>
                                    <td>{{ $danhmuc->ten_danhmuc }}</td>
                                    <td>
                                        <a href="{{ asset('admin/danhmuc/edit/'.$danhmuc->id_danhmuc) }}"
                                            class="btn btn-warning"><span class="glyphicon glyphicon-edit "></span>
                                            Sửa</a>
                                        <a href="{{ asset('admin/danhmuc/delete/'.$danhmuc->id_danhmuc) }}"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                                            class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>
                                            Xóa</a>
                                    </td>
                                </tr>
                                @endforeach()
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->
@stop
