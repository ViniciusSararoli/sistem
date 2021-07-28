<?php 
require_once 'Controller/Controller.php';
$c = new Controller();
$c->actionController($_REQUEST['action']);
?>