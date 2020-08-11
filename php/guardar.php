 <html>
 <head>
 <meta http-equiv="content-type" content="text/html" />
 <meta charset="UTF-8">
 </head>

 </html>
<?php 
	require "conexion.php";

	$departamento=$_POST['departamento'];
	$ciudad=$_POST['ciudad'];
	$nombre=htmlspecialchars($_POST['nombre']);
	$correo=htmlspecialchars($_POST['correop']);

	try {
		$exe_buscar=mysqli_query($conexion,"SELECT * FROM contacts WHERE correo='".$correo."'");
		
		if (mysqli_num_rows($exe_buscar)==0) {
			$sql_insert="INSERT INTO contacts(departamento, ciudad, nombre, correo) VALUES ('".$departamento."','".$ciudad."','".$nombre."','".$correo."')";
			$exe_insert=mysqli_query($conexion,$sql_insert);
			echo "<script>alert('Registro realizado correctamente.');</script>";
			echo "<script>location.href='../index.php';</script>";
		}else{
			echo "<script>alert('Tu información ha sido recibida satisfactoriamente.');</script>";
			echo "<script>location.href='../index.php';</script>";
		}	
	} catch (Exception $e) {
		echo "<script>alert('Lo sentimos, intenta registrarte más tarde.');</script>";
		echo "<script>location.href='../index.php';</script>";
	}

	

	
?>