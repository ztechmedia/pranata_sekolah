<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>SDN CIMUNING 1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="<?=base_url('assets/horison/css/style.css')?>" />
</head>
<body>

	<header id="header">
		<div class="container">
			<a href="<?=base_url("home")?>" id="logo" title="SDN CIMUNING 1">SDN CIMUNING 1</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="<?=base_url("agenda")?>">Agenda</a></li>
					<li><a href="<?=base_url("vimission")?>">Visi Misi</a></li>
 				</ul>
				<ul>
					<li><a href="<?=base_url("history")?>">Sejarah</a></li>
					<li><a href="<?=base_url("login")?>">Login</a></li>
   				</ul>
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	<!-- / header -->
	
	<?php $this->load->view($view) ?>

	<footer id="footer">
		<div class="container">
			<section>
				<article class="col-1">
					<h3>Contact</h3>
					<ul>
						<li class="address"><a href="#">Jalan Mustika Jaya 56, RT.003/RW.001, Cimuning, Kec. Mustika Jaya, Kota Bks, Jawa Barat 17155, Indonesia/a></li>
						<li class="mail"><a href="#">sdncimuningi@yahoo.co.id</a></li>
						<!-- <li class="phone last"><a href="#">(021)</a></li> -->
					</ul>
				</article>
			</section>
			<p class="copy"><a href="<?=BASE_URL("home")?>">SDN CIMUNING 1 2020</a></p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	<script src="<?=base_url('assets/horison/js/jquery-1.11.1.min.js')?>"></script>
	<script src="<?=base_url('assets/horison/js/plugins.js')?>"></script>
	<script src="<?=base_url('assets/horison/js/main.js')?>"></script>
</body>
</html>
