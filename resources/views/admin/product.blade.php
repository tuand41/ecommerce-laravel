@extends('admin.master')
@section('title','Sản phẩm')		
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
					<div class="panel-heading">Danh sách sản phẩm</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{ asset('admin/sanpham/add') }}" class="btn btn-primary">Thêm sản phẩm</a>
								@include('errors.note')
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th width="25%" style="text-align: center;">Tên Sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th width="20%">Ảnh sản phẩm</th>
											<th>Danh mục</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($listsp as $sp)
											{{-- expr --}}
											<tr>
											
											<td style="text-align: center;">{{ $sp->ten_sp }}</td>
											<td>{{number_format($sp->gia_sp,0,',','.')}} VND</td>
											<td>
												<img height="150px" src="{{ asset('storage/app/avatar/'.$sp->img_sp) }}" class="thumbnail">
											</td>
											<td> {{ $sp->ten_danhmuc }} </td>
											<td>
												<a href="{{ asset('admin/sanpham/edit/'.$sp->id_sp) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{ asset('admin/sanpham/delete/'.$sp->id_sp) }}" onclick="return confirm('bạn chắc chắn muốn xóa')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>		
										@endforeach
																		
									</tbody>
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