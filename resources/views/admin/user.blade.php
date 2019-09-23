@extends('admin.master')
@section('title','User')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách User</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-5 col-lg-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Thêm user
                    </div>
                    <div class="panel-body">
                        @include('errors.note')
                        <form method="post" role="form">
                            <fieldset>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="emaildk" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Họ và tên" name="name" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="passwordk" type="password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Re Password" name="repasswordk"
                                           type="password">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submitdk" value="Thêm User" class="btn btn-primary">
                                </div>
                            </fieldset>
                        <!-- {{ csrf_field() }} -->
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-7 col-lg-7">
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách user</div>
                    <div class="panel-body">
                        @extends('errors.noti')
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="bg-primary">
                                    <th>Email user</th>
                                    <th style="width:30%">Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $u)
                                    <tr>
                                        <td><span style="margin-left: 30px;">{{ $u->email }}</span></td>
                                        <td>
                                            <a href="{{ asset('admin/user/edit/'.$u->id) }}"
                                               class="btn btn-warning"><span class="glyphicon glyphicon-edit "></span>
                                                Sửa</a>
                                            <a href="{{ asset('admin/user/delete/'.$u->id) }}"
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
        </div><!--/.row-->
    </div>    <!--/.main-->
@stop