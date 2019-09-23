@extends('client.master')
@section('title','Tìm kiếm')
@section('main')
	<div class="col-xs-12 col-md-9 ">
		<div class="danhmuc">
			<h3>
				<li class="list-group-item list-group-item-info "> Tìm kiếm với {{ $key }}: </li>
			</h3>
			<div class="row">
				<p></p>
				@foreach ($sanpham as $sp)
					{{-- expr --}}
					<div class="col-sm-6 col-md-3">
						<div class="thumbnail">
							<a href="{{ asset('detail/'.$sp->id_sp.'/'.$sp->slug_sp.'.html') }}">
								<img src="{{ asset('storage/app/avatar/'.$sp->img_sp) }}" alt="..." width="100%"></a>
							<div class="caption ">
								<h5>{{ $sp->ten_sp }}</h5>
								<p>Giá: {{ number_format($sp->gia_sp,0,',','.') }} đ</p>
								<div class="row" style="margin-left: 1px">
									<a href="{{ asset('detail/'.$sp->id_sp.'/'.$sp->slug_sp.'.html') }}" class="btn btn-default " role="button">Chi Tiết</a>
									<a href="{{ asset('giohang/them/'.$sp->id_sp) }}" class="btn btn-primary " role="button">Mua Ngay</a>
								</div>								
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12 text-center">				
				{{ $sanpham->links() }}				
			</div>
		</div>				
	</div>
@stop