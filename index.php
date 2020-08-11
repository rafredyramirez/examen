<!DOCTYPE html>
<html>
<head>

	<title>Sigma</title>

 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">

	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/colombia.js"></script>

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet">

</head>
<body>
	<div class="container">

		<header class="cont-header">
			<img src="images/sigma-logo.png" class="img-fluid" alt="sigma-image">
			<h2 class="subtitulo">Prueba de desarrollo Sigma</h2>
			<p class="informacion">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			</p> 
		</header>

		<section>
			<div class="container">
				<div class="row">
				  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
				  	<img src="images/sigma-image.png" class="img-fluid" alt="sigma-image"></div>
				  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
				  	<div class="cuadro">
				  		<div class="container">
				  			<form action="php/guardar.php" method="POST" class="frm-datos" onsubmit="javascript:return Validar(this);">
				  				<div class="form-group">
							    	<label for="departamento" class="label-form">Departamento*</label> <select class="form-control" name="departamento" id="departamento" onblur="javascript:Validar();" autofocus="">
							    		<option value="0"></option>
							    	</select>
							  	</div>

							  	<div class="form-group">
								    <label for="ciudad" class="label-form">Ciudad*</label>
							     	<select class="form-control" name="ciudad" id="ciudad" onblur="javascript:Validar();">
							     		<option value="0"></option>
							     	</select>
						 	 	</div>

							   	<div class="form-group">
							    	<label for="nombre" class="label-form">Nombre*</label>
							    	<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese nombre del solicitante" onblur="javascript:Validar();" title="Máximo 50 caracteres">
							  	</div>

							  	<div class="form-group">
							    	<label for="correop" class="label-form">Correo*</label>
							    	<input type="email" class="form-control" name="correop" id="correop" placeholder="Ingrese correo electrónico" onblur="javascript:Validar();" title="Máximo 30 caracteres">
							  	</div>
							 
							 	<input type="submit" value="ENVIAR" class="btn-enviar">
							 	
							  	<div class="alert alert-primary" role="alert" id="mensaje" style="display: none;">
								</div>
							</form>
						</div>
				  	</div>
				  </div>
				</div>
			</div>
		</section>

		<footer class="cont-footer">
			<div class="row">
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			 		<button type="submit" class="btn-invision">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Made in InVision</button>
	 			</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" id="cont-botones">
					<div class="btn-comentarios">
						<div id="p"> 
							<i class="far fa-comment-alt fa-lg"></i>	
						</div>
						<a href="" id="boton"><i class="far fa-comment-alt fa-lg"></i> Comments</a>
					</div>
	 			</div>

		 		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
		 			<div class="btn-code">
						<div id="p2"> 
							<i class="fas fa-code fa-lg"></i>	
						</div>
						<a href="" id="boton2"><i class="fas fa-code fa-lg"></i> Inspect</a>
					</div>
		 		</div>

		 		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
		 			<div class="btn-screens">
						<div id="p3"> 
							<i class="fas fa-mobile-alt fa-lg"></i>
						</div>
						<a href="" id="boton3"><i class="fas fa-mobile-alt fa-lg"></i> Screens (1)</a>
					</div>
		 		</div>
			</div>	
		</footer>

	</div>
	<script type="text/javascript" src="js/MaxLength.min.js"></script>
	<script type="text/javascript">
	    $(function () {
	        $("#nombre").MaxLength(
	        {
	            MaxLength: 50,
	            DisplayCharacterCount: false	
	        });

	        $("#correop").MaxLength(
	        {
	            MaxLength: 30,
	            DisplayCharacterCount: false	
	        });
	    });
	</script>
	<script type="text/javascript">
		function Validar(){
			var departamento=document.getElementById('departamento').value;
			var ciudad=document.getElementById('ciudad').value;
		    var nombre=document.getElementById('nombre').value;
	    	var email_personal=document.getElementById('correop').value;

		    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
		    
		    if (departamento==0) {
		    	$('#mensaje').html('<center>Debe seleccionar un departamento</center>').slideDown(500);
				return false;
		    }else{
		    	$('#mensaje').html('').slideUp(300);
		    }

		    if (ciudad==0) {
		    	$('#mensaje').html('<center>Debe seleccionar una ciudad</center>').slideDown(500);
				return false;
		    }else{
		    	$('#mensaje').html('').slideUp(300);
		    }

		    if (nombre=="") {
		    	$('#mensaje').html('<center>Ingrese un nombre</center>').slideDown(500);
				return false;
		    }else{
		    	$('#mensaje').html('').slideUp(300);
		    }

		    if (email_personal=="") {
		    	$('#mensaje').html('<center>Ingrese correo electrónico</center>').slideDown(500);
	      		$('#email_personal').focus();
	      		return false;
		    }else{
		    	$('#mensaje').html('').slideUp(300);
			    	if (emailRegex.test(email_personal)) {
		  			$('#mensaje').html('').slideUp(300);	
		    	} else {
		      		$('#mensaje').html('<center><strong>Advertencia</strong> El correo no tiene el formato correcto</center>').slideDown(500);
					$('#email_personal').focus();
		  			return false;
		    	}
		    }
	  }
	</script>
</body>
</html>
