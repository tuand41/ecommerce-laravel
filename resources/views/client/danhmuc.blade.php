@extends('client.master')
@section('title','Danh mục')
@section('main')
<div class="col-xs-12 col-md-9 ">
	<div class="danhmuc">
		<h3>
			<li class="list-group-item list-group-item-info text-center">{{ $tendanhmuc->ten_danhmuc }}</li>
		</h3>
		<div class="row">
			@foreach ($hieu as $h)
			{{-- expr --}}
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<a href="{{ asset('detail/'.$h->id_sp.'/'.$h->slug_sp.'.html') }}">
						<img src="{{ asset('storage/app/avatar/'.$h->img_sp) }}" alt="..." width="100%"></a>
					<div class="caption ">
						<h5>{{ $h->ten_sp }}</h5>
						<p>Giá: {{ number_format($h->gia_sp,0,',','.') }} đ</p>
						<div class="row" style="margin-left: 1px">
							<a href="{{ asset('detail/'.$h->id_sp.'/'.$h->slug_sp.'.html') }}" class="btn btn-default "
								role="button">Chi Tiết</a>
							<a href="{{ asset('giohang/them/'.$h->id_sp) }}" class="btn btn-primary " role="button">Mua
								Ngay</a>
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
			{{ $hieu->links() }}
		</div>
	</div>
</div>
@stop
