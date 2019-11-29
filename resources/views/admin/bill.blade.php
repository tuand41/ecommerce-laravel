@extends('admin.master')
@section('title','Hoá đơn')		
@section('main')		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lí hoá đơn</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách Hoá Đơn</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">								
								@include('errors.note')
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th style="text-align: center;">Email</th>
											<th>Tên khách hàng</th>
											<th>Số điện thoại</th>
											<th>Đia chỉ</th>
                                            <th>Số tiền Thanh toán</th>
                                            <th>Ngày đặt</th>
											<th width="25%">ghi chu</th>
											<th>Trạng thái thanh toán</th>
											<th></th>                                        
										</tr>
									</thead>
									<tbody>										
										@foreach ($bill as $b)
											<tr>
											<th>{{ $b->email_bill }}</th>
											<th>{{ $b->hovaten }}</th>
											<th>{{ $b->sdt }}</th>
											<th>{{ $b->diachi }}</th>
											<th>{{ $b->totall }}</th>
											<th>{{ $b->date_order }}</th>
											<th>{{ $b->note }}</th>
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
