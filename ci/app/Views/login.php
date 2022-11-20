<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="RayyanTech, PMC Statistics">
	<meta name="description" content="RayyanTech Admin Panel customized for PMC Statistics">
	<meta name="robots" CONTENT="noindex, nofollow">
	<meta property="og:title" content="">
	<meta property="og:url" content="">
	<meta property="og:type" content="">
	<meta property="og:description" content="">
	<meta property="og:image" content="">
	<meta name="twitter:card" content="">
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
	<meta name="twitter:url" content="">
	<meta name="twitter:image" content="">
	<link rel='shortcut icon' href='<?= base_url('assets/img/favicon.jpg') ?>'>
	<title>PMC :: Statistics Admin Panel</title><!-- GLOBAL VENDORS-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto:300,400,500,600,700" media="all">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link href="<?= base_url('assets/admin/vendors/%40fortawesome/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/admin/vendors/themify-icons/themify-icons.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/admin/vendors/line-awesome/css/line-awesome.min.css') ?>" rel="stylesheet" /><!-- PAGE LEVEL VENDORS-->
	<!-- THEME STYLES-->
	<link href="<?= base_url('assets/admin/css/app.min.css') ?>" rel="stylesheet" /><!-- PAGE LEVEL STYLES-->
	<style>
		body {
			background-color: #eff4ff;
		}

		.auth-wrapper {
			flex: 1 0 auto;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 50px 15px 30px 15px;
		}

		.auth-content {
			max-width: 400px;
			flex-basis: 400px;
			box-shadow: 0 5px 20px #d6dee4;
		}

		.home-link {
			position: absolute;
			left: 5px;
			top: 10px;
		}
	</style>
</head>

<body>
	<div class="page-wrapper">
		<div class="auth-wrapper">
			<div class="card auth-content mb-0">
				<div class="card-body py-5">
					<div class="text-center mb-5">
						<h3 class="mb-3 text-primary"><img src="assets/logo.png" style="height: 70px; width: inherit;" alt="PHF Ogun" class="img-responsive"></a></h3>
						<div class="font-18 text-center">Login to Your account</div>
					</div>
					<form action="<?=base_url('auth')?>" method="post">
					<div class="mb-4">
						<div class="md-form mb-0"><input class="md-form-control" type="text" name="username" required><label>Username</label></div>
					</div>
					<div class="mb-4">
						<div class="md-form mb-0"><input class="md-form-control" type="password" name="password" required><label>Password</label></div>
					</div>
					<div class="flexbox mb-5"><label class="ui-switch switch-solid"><input type="checkbox" checked=""><span class="ml-0"></span> Remember Me</label>
						<!-- <a href="forgot-password.html">Forgot password?</a> -->
					</div><button class="btn btn-primary btn-rounded btn-block" type="submit">LOGIN</button>
					</form>
					<div class="text-center mt-5 font-13">
						<div class="mb-2 text-muted">2019 © All rights reserved</div>
						<div>See<a class="hover-link ml-2" href="#" style="border-bottom: 1px solid">Privacy Policy</a></div>
					</div>
				</div>
			</div>

		</div>
	</div><!-- BEGIN: Page backdrops-->
	<div class="sidenav-backdrop backdrop"></div>
	<div class="preloader-backdrop">
		<div class="page-preloader">Loading</div>
	</div><!-- END: Page backdrops-->
	<!-- CORE PLUGINS-->
	<script src="<?= base_url('assets/admin/vendors/jquery/dist/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script><!-- PAGE LEVEL PLUGINS-->
	<script src="<?= base_url('assets/admin/vendors/jquery-validation/dist/jquery.validate.min.js') ?>"></script><!-- CORE SCRIPTS-->
	<script src="<?= base_url('assets/admin/js/app.min.js') ?>"></script><!-- PAGE LEVEL SCRIPTS-->
	<script>
		$(function() {
			$('#login-form').validate({
				rules: {
					email: {
						required: true,
						email: true
					},
					password: {
						required: true
					}
				},
				errorClass: 'invalid-feedback',
				validClass: 'valid-feedback',
				errorPlacement: function(error, element) {
					if (element.hasClass('md-form-control')) {
						error.insertAfter(element.closest('.md-form'));
					} else {
						error.insertAfter(element);
					}
				},
				highlight: function(e) {
					$(e).addClass("invalid").removeClass('valid');
				},
				unhighlight: function(e) {
					$(e).removeClass("invalid").addClass('valid');
				},
			});
		});
	</script>
</body>

</html>
