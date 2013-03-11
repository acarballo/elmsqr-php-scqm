<?php

class controllers_frontController
{
	protected $config;
	
	public function __construct($route)
	{
		$route = $route -> getRoute();
		$this->config = $_SESSION['register']['config'];	
		include ($this->config['path.controllers']."/".$route['controller'].".php");
	}
	
	
}