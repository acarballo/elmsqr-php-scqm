<?php

class Bootstrap()
{
	// Read Config
	// Include Gateways
	// Include ActionHelpers
	// Include ViewHelpers
	// Include Models
	// Include FrontFunction
	// Start Session
	// Route
	// Acl	

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
	
	// Include FrontFunctions
	include_once('../application/frontFunctions.php');
	
	session_start();
	$route=router($config);
	$route=acl($route);
	
	
	debug($_SESSION);
	
}