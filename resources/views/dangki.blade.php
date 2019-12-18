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
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading"><span style="margin-left: 35%;">Đăng kí</span> </div>
				<div class="panel-body">
					<form method="post" role="form">
						@include('errors.note')
						<fieldset>
							{{ csrf_field() }}
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="emaildk" type="email">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Họ và tên" name="name" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="passwordk" type="password">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Re Password" name="repasswordk"
									type="password">
							</div>
							<div class="form-group">
								<input type="submit" name="submitdk" value="Đăng kí" class="btn btn-primary">
							</div>
						</fieldset>
						<!-- {{ csrf_field() }} -->
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</body>

</html>
