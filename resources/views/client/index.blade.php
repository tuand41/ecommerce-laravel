@extends('client.master')
@section('title','Shop điện thoại')
@section('main')
	<!-- Phần center có thể bị thay đổi -->
	<div class="col-xs-12 col-md-9 ">
		<div class="spbanchay">
			<h3>
				<li class="list-group-item list-group-item-info text-center">Sản phẩm nổi bật</li>
			</h3>
			<div class="row">
				@foreach ($sanpham as $dt)
					{{-- expr --}}
					<div class="col-sm-6 col-md-3">
						<div class="thumbnail">
							<a href="{{ asset('detail/'.$dt->id_sp.'/'.$dt->slug_sp.'.html') }}">
								<img src="{{ asset('storage/app/avatar/'.$dt->img_sp) }}" alt="..." width="100%"></a>
							<div class="caption ">
								<h5>{{ $dt->ten_sp }}</h5>
								<p>Giá: {{ number_format($dt->gia_sp,0,',','.') }} đ</p>
								<div class="row" style="margin-left: 1px">
									<a href="{{ asset('detail/'.$dt->id_sp.'/'.$dt->slug_sp.'.html') }}" class="btn btn-default " role="button">Chi Tiết</a>
									<a href="{{ asset('giohang/them/'.$dt->id_sp) }}" class="btn btn-primary " role="button">Mua Ngay</a>
								</div>

							</div>
						</div>
					</div>
				@endforeach

			</div>
		</div>
		<hr>
		<div class="spbanchay">
			<h3>
				<li class="list-group-item list-group-item-info text-center">Sản phẩm mới</li>
			</h3>
			<div class="row">
				@foreach ($news as $dt)
					{{-- expr --}}
					<div class="col-sm-6 col-md-3">
						<div class="thumbnail">
							<a href="{{ asset('detail/'.$dt->id_sp.'/'.$dt->slug_sp.'.html') }}"><img src="{{ asset('storage/app/avatar/'.$dt->img_sp) }}" alt="..." width="100%"></a>
							<div class="caption ">
								<h5>{{ $dt->ten_sp }}</h5>
								<p>Giá: {{ number_format($dt->gia_sp,0,',','.') }} đ</p>
								<div class="row" style="margin-left: 1px">
									<a href="{{ asset('detail/'.$dt->id_sp.'/'.$dt->slug_sp.'.html') }}" class="btn btn-default " role="button">Chi Tiết</a>
									<a href="{{ asset('giohang/them/'.$dt->id_sp) }}" class="btn btn-primary " role="button">Mua Ngay</a>
								</div>

							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div> <!-- /.col-xs-12.col-md-3.center -->
@stop
