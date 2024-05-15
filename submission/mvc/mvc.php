<!-- This PHP code organizes files using the Model-View-Controller (MVC) architecture. 
It requires three essential components: view, model, and controller. 
The page URI is retrieved from the server to determine the requested page. 
Based on the URI, the appropriate controller is instantiated to handle the request. 
This ensures that the application's logic, data, and presentation layers are separated, 
enhancing maintainability and scalability. -->
<?php
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';
$pageURI =$_SERVER['REQUEST_URI'];
$pageURI =substr($pageURI,strrpos($pageURI,'index.php')+10);
	if (!$pageURI)
		new Controller('home');
	else
		new Controller($pageURI);
?>