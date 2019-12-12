@extends('admin.master')
@section('title','Đơn hàng')		
@section('main')		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lí đơn hàng</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
                <div class="panel-heading">Chi tiết Đơn hàng </div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">								
								@include('errors.note')
								<table class="table table-bordered .table-responsive text-center">
                                    <tr class="active">
                                        <td width="22.222%">Tên sản phẩm</td>
                                        <td width="11.111%">Ảnh mô tả</td>                                        
                                        <td width="11.222%">Số lượng</td>
                                        <td width="16.6665%">Đơn giá</td>
                                        <td width="16.6665%">Thành tiền</td>
                                        <td >tuỳ chọn</td>
                                    </tr>
                                    @foreach ($details as $dt)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $dt->product->ten_sp}}</td>
                                        <td><img class="img-responsive" src="{{ asset('storage/app/avatar/'.$dt->product->img_sp ) }}" width="90%"></td>                                        
                                        <td style="vertical-align: middle;">
                                            {{-- <div class="form-group">
                                                <input class="form-control" type="number" value="{{ $dt->qty }}">
                                            </div> --}}
                                            {{ $dt->qty }}
                                        </td>
                                        <td style="vertical-align: middle;">{{ $dt->price }}</td>
                                        <td style="vertical-align: middle;">{{ number_format($dt->price * $dt->qty,0,',','.') }}</td>
                                        <td style="padding-top: 3%">
                                            <a href="" 
                                                class="btn btn-warning"><span class="glyphicon glyphicon-edit "></span>
                                                 Sửa</a>
                                            <a href=""
                                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                                                class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>
                                                 Xóa</a>
                                        </td>
                                    </tr>
                                    @endforeach
                    
                                </table>							
                            </div>
                            
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop	
