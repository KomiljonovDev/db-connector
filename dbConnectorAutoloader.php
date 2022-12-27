<?php

	spl_autoload_register(function ($name)
	{
		$name = str_replace(['KomiljonovDev','\\'], ['db_config', '/'], $name);
		require_once $name . '.php';
	});

?>