<?php 
echo "<pre>Post: ";
print_r($_POST);
echo "</pre>";

echo "<pre>Get: ";
print_r($_GET);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Formularios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="robots" content="noarchive,noindex">
<meta name="description" content="Formulario">
<meta name="keywords" content="Formulario">
</head>
<body>

<div id="wrapper">

<form action="procesar.php" method="POST" 
	enctype="multipart/form-data">

	<ul>
		<li>Id: <input type="hidden" name="id" value="1"/></li>
		<li>Name: <input type="text" name="name"/></li>
		<li>Email: <input type="text" name="email"/></li>
		<li>Password: <input type="password" name="password"/></li>
		<li>Dirección: <input type="text" name="address"/></li>
		<li>Descripción: <textarea rows="10" cols="10" name="description"></textarea></li>
		<li>Sexo: M: <input type="radio" name="sex" value="M" \> 
		H: <input type="radio" name="sex" value="H" \>
		O: <input type="radio" name="sex" value="O" \>
		</li>
		<li>Ciudad: <select name="city">
					<option value="vigo">Vigo</option>
					<option value="bcn">Barcelona</option>
					<option value="bilbao">Bilbao</option>
					</select></li>
		<li>Foto: <input type="file" name="photo"/></li>
		<li>Mascotas: Tigre: <input type="checkbox" name="pets[]" value="tiger"/>
		Tarantula: <input type="checkbox" name="pets[]" value="spider"/>
		Iguana: <input type="checkbox" name="pets[]" value="iguana"/>
		</li>
		<li>Deportes: <select multiple name="sports[]">
					<option value="futbol">Futbol</option>
					<option value="beisbol">Besisbol</option>
					<option value="natacion">Natacion</option>
					</select></li>
		<li>Submit: <input type="submit" name="submit" value="Enviar"/></li>
		<li>Button: <input type="button" name="button" value="Boton"/></li>
		<li>Reset: <input type="reset" name="reset" value="Reset"/></li>
	</ul>
</form>



</div>

<div class="bottom">
</div>
</body>
</html>
