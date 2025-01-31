<!DOCTYPE html>
<html>

<head>
	<base href="{{ asset('/public/layout/backend') }}/">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập nè</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<style>
		
	</style>
</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading"><span style="margin-left: 35%;">Đăng nhập</span> </div>
				<div class="panel-body">
					<form method="POST" role="form">
						@include('errors.note')
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus=""
									value="{{old('email')}}">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password"
									value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="rem">Remember Me
								</label>
								<a style="float: right;" href="{{ asset('login/dangki')}}">Bạn chưa có tài khoản </a>
							</div>
							<!-- Modal -->

							<div class="form-group">
								<input type="submit" name="submit" value="Đăng nhập" class="btn btn-primary">
							</div>
						</fieldset>
						{{ csrf_field() }}
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>
