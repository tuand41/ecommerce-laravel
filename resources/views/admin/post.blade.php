@extends('admin.master')
@section('title','Tin Tức')		
@section('main')		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tin tức</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách Bài viết</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{ asset('admin/post/add') }}" class="btn btn-primary">Thêm Bài viết</a>
								@include('errors.note')
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th style="text-align: center;">Tên Bài viết</th>
											<th>Hình ảnh</th>
											<th>mô tả</th>
											<th width="15%">Tùy chọn</th>
										</tr>
									</thead>
									<tbody>									
										@foreach ($post as $p)
											<tr>
												<td>{{$p->name }}</td>
												<td><img height="150px" src="{{ asset('storage/app/post/'.$p->img) }}" class="thumbnail"></td>
												<td>{{$p->description}}</td>
												<td>
												<a href="{{ asset('admin/post/edit/'.$p->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit "></span>
													Sửa</a>
												<a href="{{ asset('admin/post/delete/'.$p->id) }}"
													onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
													class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>
														Xóa</a>
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
