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

<form method="POST" enctype="multipart/form-data">	
	<ul>
		<li>Id: <input type="hidden" name="id" value="<?= (isset($_GET['id']))?$_GET['id']:'1';?>"/></li>
		<li>Name: <input type="text" name="name" value="<?= (isset($user[1])&&$user[1]!='')?$user[1]:'';?>" /></li>
		<li>Email: <input type="text" name="email" value="<?= (isset($user[2])&&$user[2]!='')?$user[2]:'';?>" /></li>
		<li>Password: <input type="password" name="password"/></li>
		<li>Dirección: <input type="text" name="address" value="<?= (isset($user[4])&&$user[4]!='')?$user[4]:'';?>"/></li>
		<li>Descripción: <textarea rows="10" cols="10" name="description"><?= (isset($user[5])&&$user[5]!='')?$user[5]:'';?></textarea></li>
		<li>
			Sexo: <?=createRadioCheckFromDb($config, 'genders', 'sex','idgender', 'gender', '', FALSE);?>
		</li>
		<li>
			Ciudad: <?=createSelectFromDb($config, 'cities', 'city','idcity', 'city', '', FALSE);?>
		</li>
		<li>Foto: <input type="file" name="photo"/>
		<?php if(isset($user[11])): ?>
			<img src="<?="/uploads/".$user[11];?>" width=100px />
		<?php endif; ?>
		</li>
		<li>
			<?=createRadioCheckFromDb($config, 'pets', 'pets', 'idpet', 'pet', '', TRUE);?>
		</li>
		<li>Deportes: 
			<?=createSelectFromDb($config, 'sports', 'sports', 'idsport', 'sport', '', TRUE);?>
		</li>
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
