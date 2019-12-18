@extends('admin.master')
@section('title','Đơn hàng')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Quản lí đơn hàng</h1>
		</div>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách Đơn Hàng</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							@include('errors.note')
							<table class="table table-bordered" style="margin-top:20px;">
								<thead>
									<tr class="bg-primary">
										<th style="text-align: center" width="15%">Tên khách hàng</th>
										<th>Số điện thoại</th>
										<th style="text-align: center" width="20%">Đia chỉ</th>
										<th style="text-align: center" width="15%">Tổng tiền</th>
										<th style="text-align: center">Ngày đặt</th>
										<th>Trạng thái </th>
										<th style="text-align: center">thao tác</th>
									</tr>
								</thead>
								<tbody style="vertical-align: middle;">
									@foreach ($bill as $b)
									<tr>
										<th style="padding-left: 15px;vertical-align: middle;">{{ $b->hovaten }}</th>
										<th style="vertical-align: middle;">{{ $b->sdt }}</th>
										<th style="vertical-align: middle;">{{ $b->diachi }}</th>
										<th style="vertical-align: middle;">{{ number_format($b->totall,0,',','.') }}
											VND</th>
										<th style="vertical-align: middle;">{{ $b->date_order }}</th>
										<th style="vertical-align: middle;">
											@if ($b->status == 0)
												<a href="javascrip:void(0)" class="badge badge-secondary">Chờ xử lý</a>
											@elseif ($b->status = 1)
												<a href="#" class="badge badge-success">Đã xử lý</a>
											@else
												<a href="#" class="badge badge-success">Đang giao hàng</a>
											@endif
										</th>
										<th style="vertical-align: middle;">

											<a href="{{ asset('admin/bill/delete/'.$b->id_bill) }}"
												class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i>
												Xóa</a>
											<a href="{{ asset('admin/bill/show/'.$b->id_bill) }}"
												class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
										</th>
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
	</div>
	<!--/.row-->
</div>
<!--/.main-->
@stop
