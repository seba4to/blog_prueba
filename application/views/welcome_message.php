<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Blog Post - Start Bootstrap Template</title>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url(); ?>/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS 
	<link href="<?php echo base_url(); ?>/css/blog-post.css" rel="stylesheet">
	-->

	<style>

	body {
		background-color:#e9eaed;
	}
	#pantalla{
		margin-top:80px;
	}
	img {
		height:100px;
		width:168px;
	}
	</style>



</head>



<body >
	




	<!-- Page Content -->
	<div class="container">

		<div id="navegador">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">

					<div class="navbar-header">
						<a class="navbar-brand" href="#"> Blog eclass</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li>
								<a href="#">Sobre el blog</a>
							</li>
							<li>
								<a href="#">Videojuego</a>
							</li>
							<li>
								<a href="#">Contáctame</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>

		<div id="pantalla">
			<div class="row">

				<div class="col-md-3">
					<div class="panel panel-primary">
						<div class="panel-heading">Acciones</div>

						<div class="panel-body">

							<?php $nombre."###"; ?>

							<div class="form-group">
							<label for="usr">Name:</label>
							<input type="text" class="form-control" id="usr">
							</div>
							<div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" id="pwd">
							</div>



						</div>

					</div>
				</div>

				<div class="col-md-9">
					<div class="panel panel-primary">
						<div class="panel-heading">Entradas</div>
						<div class="panel-body">

						<div class="panel panel-info">
							<div class="panel-heading">Panel with panel-info class</div>
							<div class="panel-body">Panel Content asdasd asd asdas dsada sd sa d sad asd as das das d asd as d as d asdas d as d as d sa dasdasd asdas  da sd as d as d as dasd asd as d asd asd</div>
						</div>

						<div class="panel panel-info">
							<div class="panel-heading">Panel with panel-info class</div>
							<div class="panel-body">asdfsdafadsf fdgh j ghjhgj ghj gh jfgjghjghjghfjfjghjghj hgjghjhgj ghjgfj ghjghjhgj ghjghjfhgjghjhgjhgjhgj hgjhgj ghjghjghjgh jhgj hj ghjhgj hgj hg jhg jfhjh gj hgj hgjghj ghjfgjfhj ghjghj hgj hgjhgjhjh fjfhj</div>
						</div>

						</div>
					</div>
			   	</div>

			</div>
		</div>

		<hr>

		<!-- Footer -->
		<footer>
			<div class="row">
				<div class="col-lg-12">
					<p>Copyright &copy; Alvaro Maurelia - Blog de prueba para Eclass</p>
				</div>
			</div>
		</footer>

	</div>




	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>/js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>

</body>

</html>