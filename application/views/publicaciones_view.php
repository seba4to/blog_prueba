<?php $base_url = "http://localhost/blog_prueba/index.php/publicaciones/"; ?>
<!DOCTYPE html> <?php //$cantidad[0]; var_dump($cantidad); exit; ?>
<html lang="en">

<head>
	<title>Blog eclass</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

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
	
	<div class="container">

	<!--
	////////////////////////////////////////////////////////////
	//////////// BARRA NAVEGACION SUPERIOR /////////////////////
	////////////////////////////////////////////////////////////
	-->		

		<div id="navegador">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?php echo $base_url;?>ver_publicaciones"> Blog eclass</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li>
								<a href="#">Sobre el blog</a>
							</li>
							<li>
								<a href="#">Buscar datos</a>
							</li>
							<li>
								<a href="#">Contáctame</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>

		<!--
		////////////////////////////////////////////////////////////
		//////////// PAGINA GENERAL, INCLUYE MENU Y PUB ////////////
		////////////////////////////////////////////////////////////
		-->		

		<div id="pantalla">
			<div class="row">

				<!--
				////////////////////////////////////////////////////////////
				//////////// MENU LATERAL IZQUIERDO ////////////////////////
				////////////////////////////////////////////////////////////
				-->		

				

					
					<?php 
						if($tipo_pagina!="leer_publicacion"){ ?>
						<div class="col-md-3">
							<div class="panel panel-primary">
								<div class="panel-heading">Acciones</div>
								<div class="panel-body">

								<?php 
									//echo "---->".$this->session->userdata('username')."<----<br>";
									if($this->session->userdata('logeado')){
										echo "Bienvenido ".$this->session->userdata('username');
										echo "<br><br>Este es tu menú personalizado<br><br>";
										echo "<a href='".$base_url."logout'><button type='button' class='btn btn btn-danger'>Salir</button></a>";
										echo "<br><br><a href='".$base_url."crear_publicacion'><button type='button' class='btn btn btn-primary'>Crear Publicación Nueva</button></a>";

									}else{ ?>

										<form method="post" action="<?php echo $base_url;?>login"  id="login" />
											<div class="form-group">
												<label for="usr">Nombre:</label>
												<input type="text" class="form-control" name="username" id="username">
											</div>
											<div class="form-group">
												<label for="pwd">Contraseña:</label>
												<input type="password" class="form-control" name="password" id="password">
											</div>
											<input type="hidden" name="login" id="login" value="1">
											<center><button type="submit" class="btn btn-primary">Ingresar</button></center>
										</form>

										<br>
										Menú para usuarios no registrados
										<br><br>
										<ul><button type='button' class='btn btn btn-success'>Opción 1</button></ul>
										<ul><button type='button' class='btn btn btn-success'>Opción 2</button></ul>
										<ul><button type='button' class='btn btn btn-success'>Opción 3</button></ul>
										<ul><button type='button' class='btn btn btn-success'>Opción 4</button></ul>



								<?php } ?>

								</div>
							</div>
						</div>
						<?php } ?>
					

				<?php
					if($tipo_pagina=="leer_publicacion"){
						echo '<div class="col-md-12">';
					}
					else {
						echo '<div class="col-md-9">';	
					}
				?>
				

					<!--
					////////////////////////////////////////////////////////////
					//////////// PUBLICACION EN GENERAL, GRANDE ////////////////
					////////////////////////////////////////////////////////////
					-->

					<?php
					if($tipo_pagina=="listar_publicaciones"){  ?>

						<div class="panel panel-primary">
							<div class="panel-heading"><b>Publicaciones</b></div>
							<div class="panel-body">


								<?php 

										 foreach ($publicaciones as $resultado ) { ?>
											<div class="panel panel-info">
												<div class="panel-heading">
													<b><?php echo $resultado->titulo; ?></b>
													<div class="pull-right"><?php echo $resultado->fecha; ?></div>
												</div>
												<div class="panel-body"> 
													<?php echo $resultado->resumen; ?>
													<br><br>Publicado por <?php echo $resultado->username; ?>
													<a href="<?php echo $base_url; ?>ver_publicacion/<?php echo $resultado->id_publicacion; ?>">
														<button type="button" class="btn pull-right">
															Leer más
														</button>
													</a>
												</div>
											</div>
								<?php 
									} 
								?>



								<center>
									<?php
										foreach($cantidad as $elemento){
											$cantidad = $elemento->cantidad;
										}
										$paginacion = 5;
									?>

									<?php
										if($cantidad>$paginacion){
									?>
										<ul class="pagination">
											<?php
												for($i=0; $i<($cantidad/$paginacion); $i++){
													echo "<li ";
													if ($i==($pagina-1)) {
														echo "class='active'";
													}
													echo "><a href='".$base_url."ver_publicaciones/".($i+1)."'>".($i+1)."</a></li>";
												}
											?>
										</ul>
									<?php
										}
									?>
								</center>
								<?php echo "<center>Se han encontrado ".$cantidad." de publicaciones.</center>"; ?>
							</div>
						</div>
					<?php
					} 


					if($tipo_pagina=="leer_publicacion"){  ?>
						
						<?php 
							foreach ($publicacion as $resultado ) { ?>

								<div class="panel panel-primary">
									<div class="panel-heading">
										<b><?php echo $resultado->titulo; ?></b>
									</div>
									<div class="panel-body">
										<?php echo $resultado->texto_completo; ?>
									</div>
								</div>
						<?php	} 
						}
						?>

						<?php
						if($tipo_pagina=="crear_publicacion"){  ?>

						<div class="panel panel-primary">
							<div class="panel-heading"><b>Crear nueva publicación</b></div>
							<div class="panel-body">

								<div class="panel-body">
									<form method="post" action="<?php echo $base_url;?>crear_publicacion"  id="login" />
										
										<div class="form-group">
											<label for="titulo">Título</label>
											<input type="text" class="form-control" id="titulo" name="titulo" >
										</div>

										<div class="form-group">
											<label for="resumen">Resumen</label>
											<textarea rows="4" cols="50" class="form-control" name="resumen" id="resumen"></textarea>
										</div>

										<div class="form-group">
											<label for="texto_completo">Texto Completo</label>
											<textarea rows="4" cols="50" class="form-control" name="texto_completo" id="texto_completo"></textarea>
										</div>

										
										<input type="hidden" name="crear" id="crear" value="1">
										<center><button type="submit" class="btn btn-primary">Crear</button></center>
									</form>
								</div>
							</div>
						</div>

					<?php
					}
					?>

			   	</div>
			</div>
		</div>

	<!--
	////////////////////////////////////////////////////////////
	///////////// FOOTER ////////////////////////////////
	////////////////////////////////////////////////////////////
	-->
		<hr>
		<footer>
			<div class="row">
				<div class="col-lg-12">
					<p>Copyright &copy; Alvaro Maurelia - Blog de prueba para Eclass</p>
				</div>
			</div>
		</footer>
	</div>

</body>

</html>