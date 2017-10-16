<?php
//include cofig
require ('config.php');
require ('classes/Bootstrap.php');
require ('classes/controller.php');
require ('controllers/homeController.php');
require ('controllers/usersController.php');
require ('controllers/sharesController.php');
require ('classes/model.php');
require ('models/homeModel.php');
require ('models/sharesModel.php');
require ('models/usersModel.php');


$bootstrap = new bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller){
	$controller->executeAction();
}
