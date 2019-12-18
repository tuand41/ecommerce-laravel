<style type="text/css">
	table,
	th,
	td {
		width: 50%;
		border: 1px solid;
		text-align: center;
		border-spacing: 0px;
	}

	.content {
		margin-left: 10px;
	}
</style>
<font face="Arial">
	<div class="content">
		<h3>
			<font color="orange">Thông tin khác hàng</font>
		</h3>
		<p><span>Khác hàng: {{ $info->Name }}</span></p>
		<p><span>Email: {{ $info->email }}</span></p>
		<p><span>Điện thoại: {{ $info->sdt }}</span></p>
		<p><span>Địa chỉ: {{ $info->address }}</span></p>
		<h3>
			<font color="orange">Hoá đơn mua hàng: </font>
		</h3>
		<table>
			<tr>
				<th>Tên Sản phẩm</th>
				<th>Giá</th>
				<th>Số lượng</th>
				<th>Thành tiền</th>
			</tr>
			@foreach ($carts as $c)
			{{-- expr --}}
			<tr>
				<td>{{ $c->name }}</td>
				<td>{{ number_format($c->price,0,',','.') }}</td>
				<td>{{ $c->qty }}</td>
				<td>{{ number_format($c->price*$c->qty,0,',','.') }}</td>
			</tr>
			@endforeach
			<tr>
				<td>Tổng tiền</td>
				<td colspan="3">{{$total}}</td>
			</tr>
		</table>
		<h3>
			<font color="orange">Bạn đã đặt hàng thành công </font>
		</h3>
		<li>Sản phẩm sẽ được chuyển tới trong vòng 5 đến 8 ngày tới</li>
		<li>..............</li>
		<li>..................</li>
		<p>
			<font size="4"> Cảm ơn quý khách đã mua hàng </font>
		</p>
	</div>
</font>
