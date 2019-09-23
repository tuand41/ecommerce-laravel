@extends('admin.master')
@section('title','Sửa danh mục')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục sản phẩm</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-5 col-lg-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Thay đổi thông tin
                    </div>
                    <div class="panel-body">
                        @include('errors.note')
                        <form method="post" role="form">
                            <fieldset>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input  class="form-control" value="{{ $user->email }}" placeholder="E-mail" name="email" type="email">
                                </div>
                                <div class="form-group">
                                    <input  class="form-control" value="{{ $user->name }}" placeholder="Họ và tên" name="name" type="text">
                                </div>
                                <div class="form-group">
                                    <input  class="form-control"  placeholder="new password" name="password" type="password">
                                </div>
                                <div class="form-group">
                                    <input  class="form-control"  placeholder="new password" name="repassword" type="password">
                                </div>
                                <div class="form-group">
                                    <input  type="submit" name="submitdk" value="Thay đổi" class="btn btn-primary">
                                </div>
                            </fieldset>
                        <!-- {{ csrf_field() }} -->
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
@stop