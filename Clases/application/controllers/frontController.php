<?php

class controllers_frontController
{
	protected $config;
	
	public function __construct($route)
	{
		$route = $route -> getRoute();
		$this->config = $_SESSION['register']['config'];	
				
		$string ="controllers_".$route['controller']."Controller";
		$string2 = $route['action']."Action";
		
		$controller = new $string;
		$controller->$string2(); 	
		
	}
	
	
}