<?php 
	spl_autoload_register(function($class) {
		include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
	});

	use src\View;
	$v = new View();
	$v->render();
	echo "<br>";

	$x = new \app\View();
	$x->render();
?>