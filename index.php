<?php


function __autoload($name)  {  
	if (file_exists('lib/'.$name.'.class.php')) {
	    require_once('lib/' . $name . '.class.php' );  
	} 
}  

Settings::set('root', dirname(__FILE__) . "/");
Settings::set('app.name', 'MyApp');

$app = new Application();
$app->run();

?>