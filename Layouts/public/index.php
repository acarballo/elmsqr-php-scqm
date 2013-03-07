<?php


// Read config
$config=parse_ini_file('../application/configs/config.ini',true);
$config=$config['production'];
// $config = ReadConfig ('../application/configs/config.ini', 'development');


define ('NO_ACTION', 'no_action');
define ('NO_CONTROLLER', 'no_controller');




// Include Gateways
include_once('../application/models/dataGatewayMysql.php');

// Include actionHelpers
include_once('../application/controllers/helpers/actionHelpersFunctions.php');
include_once('../application/controllers/helpers/viewFunctions.php');


// Include viewHelpers
include_once('../application/views/helpers/helpersFunctions.php');

// Include Models
include_once('../application/models/files/functions.php');
include_once('../application/models/files/filesFunctions.php');

// 
include_once('../application/frontFunctions.php');


if(isset($_GET['controller']))
	$controller=$_GET['controller'];
else
	$controller = 'index';



if(isset($_GET['action']))
	$action=$_GET['action'];
else
	$action = 'index';



$route=router($config);


switch ($route['controller'])
{
	
	case 'users':
		include ("../application/controllers/users.php");
	break;
	
	case 'error':
		debug($route);
		echo "ERROR";
	break;

	case 'index':
		debug($route);
		echo "INDEX";
	break;	
		
	
}










