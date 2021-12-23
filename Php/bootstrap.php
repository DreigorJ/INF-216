<?php
	
	session_start();

	require __DIR__ . '/config.php';
	require __DIR__ . '/Src/error_handler.php';
	require __DIR__ . '/Src/resolve_route.php';
	require __DIR__ . '/Src/render.php';
	//require __DIR__ . '/Src/connection.php';
	//require __DIR__ . '/Src/flash.php';
	//require __DIR__ . '/Src/auth.php';


	if (resolve('/(.*)'))
		require __DIR__ . '/Site/routes.php';

	/*
	if (resolve('/admin/?(.*)'))
		require __DIR__ . '/Admin/routes.php';
	else if (resolve('/(.*)'))
		require __DIR__ . '/Site/routes.php';
	*/