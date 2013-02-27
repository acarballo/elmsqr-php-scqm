<?php
/**
 * Users Controller
 * 
 * @version 1.0 
 * 
 */

if(isset($_GET['action']))
	$action=$_GET['action'];
else 
	$action = 'select';


// Read config
$config=parse_ini_file('../application/configs/config.ini',true);
$userFilename=$config['production']['userFilename'];

// Include Models
include_once('../application/models/filesFunctions.php');


switch ($action)
{
	case 'insert':
		include_once('usersForm.php');
	break;
	
	case 'update':
		// Leer datos del archivo de usuarios
		$datos=file_get_contents($userFilename);		
		// Pasar datos a un array
		$arrayDatos=explode("\r",$datos);		
		
		if(isset($_GET['id']))
		{
			// Leer posicion id del array
			$usuario=$arrayDatos[$_GET['id']];
		
			//Convertir en array
			$usuario=explode("|",$usuario);
		}
	
		if(!empty($usuario[8]))
			$pets=explode(',',$usuario[8]);
		else
			$pets=array();
		
		if(!empty($usuario[9]))
			$sports=explode(',',$usuario[9]);
		else
			$sports=array();
		
		include_once('usersForm.php');
	break;
	
	case 'delete':
		echo "Esto delete";
	break;
		
	case 'select':
		$arrayLine=readDataFromFile($userFilename);
		include_once ('usersSelect.php');
	break;	
	
	default:
		echo "Esto default";
	break;
	
}

