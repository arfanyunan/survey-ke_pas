<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="https://pendaftaran.rskiasadewa.co.id/resources/app/icons/favicon.ico">
	<title>Survey Kepuasan Pasien RSKIA Sadewa</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

	<!-- Chart JS -->
	<link href="<?= base_url('assets/chart_bar.js'); ?>" rel="stylesheet">

	<!-- CSS -->
	<link href="<?= base_url('assets/css/css-new.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

	<!-- Untuk menampilkan password -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
			window.onload=function(){
			!function(a){a(function(){a('[data-toggle="password"]').each(function(){var b = a(this); var c = a(this).parent().find(".input-group-text"); c.css("cursor", "pointer").addClass("input-password-hide"); c.on("click", function(){if (c.hasClass("input-password-hide")){c.removeClass("input-password-hide").addClass("input-password-show"); c.find(".fa").removeClass("fa-eye").addClass("fa-eye-slash"); b.attr("type", "text")} else{c.removeClass("input-password-show").addClass("input-password-hide"); c.find(".fa").removeClass("fa-eye-slash").addClass("fa-eye"); b.attr("type", "password")}})})})}(window.jQuery);
			}
	</script>    
</head>

<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav sidebar sidebar-dark accordion bg_admin" id="accordionSidebar">
			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" target="_blank" href="/survey_sadewa">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-2">
					<h6 class="pt-2">Hallo Admin</h6>
				</div>
			</a>
			<!-- Divider -->
			<!-- Nav Item - Dashboard -->
			<hr class="sidebar-divider my-1">
			<li class="nav-item">
				<a class="nav-link" href="/survey_sadewa/admin/">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/admin/igd') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data IGD</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/admin/ralan') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data Ralan</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/admin/ranap') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data Ranap</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/admin/bangsal') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data Bangsal</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/admin/dokter') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data Dokter</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/admin/spesialis') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data Spesialis</span></a>
			</li>
			<hr class="sidebar-divider my-1">
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/admin/user') ?>">
					<i class="fas fa-user"></i>
					<span>Lihat Data User</span></a>
			</li>
			<hr class="sidebar-divider my-1">
			<li class="nav-item">
				<a href="" class="nav-link" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-sign-out-alt"></i>
					<strong>Logout</strong>
				</a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->