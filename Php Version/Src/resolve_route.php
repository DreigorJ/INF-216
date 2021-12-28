<?php
	//função de controle da url
	function resolve($route) {
		$path = $_SERVER['PATH_INFO'] ?? '/';
	
		if (strlen($path) > 1){
			rtrim($path, '/');
		}

		$route = '/^' . str_replace('/', '\/', $route) . '$/';

		if (preg_match($route, $path, $params))
			return $params;

		return false;
	}
