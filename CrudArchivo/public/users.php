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


switch ($action)
{
	case 'insert':
		echo "Esto insert";
		include_once('usersForm.php');
	break;
	
	case 'update':
		echo "Esto update";
	break;
	
	case 'delete':
		echo "Esto delete";
	break;
		
	case 'select':
		echo "Esto select";
		include_once ('usersSelect.php');
	break;	
	
	default:
		echo "Esto default";
	break;
	
}

