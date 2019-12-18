@extends('client.master')
@section('title','Giỏ hàng')
@section('main')

<script type="text/javascript">
	function updateCart(qty,rowId){
		$.get(
			'{{asset('giohang/update')}}',
			{qty:qty,rowId:rowId},
			function(){
				location.reload();
			}
		);
	}
</script>

<!-- Phần center có thể bị thay đổi -->
<div class="col-xs-12 col-md-9 " style="margin-top:20px">
	<ul class="breadcrumb">
		<li><a href="{{ asset('/') }}">Home</a></li>
		<li class="active">Giỏ Hàng</li>
	</ul>
	<div class="row" style="margin-left: 1px">
		@if (Cart::count() >= 1)
		<form>
			<table class="table table-bordered .table-responsive text-center">
				<tr class="active">
					<td width="11.111%">Ảnh mô tả</td>
					<td width="22.222%">Tên sản phẩm</td>
					<td width="22.222%">Số lượng</td>
					<td width="16.6665%">Đơn giá</td>
					<td width="16.6665%">Thành tiền</td>
					<td width="11.112%">Xóa</td>
				</tr>
				@foreach ($carts as $c)
				<tr>
					<td><img class="img-responsive" src="{{ asset('storage/app/avatar/'.$c->options->img) }}"
							width="90%"></td>
					<td>{{$c->name}}</td>
					<td>
						<div class="form-group">
							<input class="form-control" type="number" value="{{$c->qty}}"
								onchange="updateCart(this.value,'{{$c->rowId}}')">
						</div>
					</td>
					<td><span class="price">{{ number_format($c->price,0,',','.') }} d</span></td>
					<td><span class="price">{{ number_format($c->price*$c->qty,0,',','.') }} d</span></td>
					<td><a href="{{ asset('giohang/xoa/'.$c->rowId) }}"><span
								class="glyphicon glyphicon-remove-"></span> Xóa</a></td>
				</tr>
				@endforeach

			</table>
			<div class="row" id="total-price">
				<div class="col-md-6 col-sm-12 col-xs-12">
					Tổng thanh toán: <span class="total-price">{{ $tongtien }} đ</span>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<a href="{{ asset('/') }}" class="btn btn-primary">Mua tiếp</a>
					<a href="{{ asset('giohang/xoa/all') }}" class="btn btn-primary">Xóa giỏ hàng</a>
				</div>
			</div>
		</form>
		<div class="row" style="margin-left: 5px ">
			<p></p>
			@include('errors.note')
			@if (Auth::check())
			<form method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Họ và tên</label>
					<input required type="text" name="name" value="{{ old('name')}}" class="form-control">
				</div>
				<div class="form-group">
					<label>Số điện thoại</label>
					<input required type="text" name="sdt" value="{{ old('sdt')}}" class="form-control">
				</div>
				<div class="form-group">
					<label>Địa chỉ</label>
					<input required type="text" value="{{ old('address')}}" name="address" class="form-control">
				</div>
				<div class="form-group">
					<label>Ghi chú</label><br>
					<textarea name="ghichu" cols="121">
						{{ old('ghichu')}}
					</textarea>
				</div>

				<div class="form-group">
					<input type="submit" value="Mua hàng" name="submit" class="form-control btn btn-primary">
				</div>
				@else
				<hr>
				<div style="text-align: center; margin-top: 50px;">
					<span style="color: red; font-size: 25px; font-weight:  bold;"> Bạn phải đăng nhập để đặt hàng
					</span>
				</div>
				@endif
			</form>
		</div>
		@else
		<div class="row" style="text-align: center;">
			<h3> <span style="font-size: 40px; color: red;"> Giỏ hàng trống </span> </h3>
		</div>
		@endif

	</div>
</div> <!-- /.col-xs-12.col-md-3.center -->
@stop
