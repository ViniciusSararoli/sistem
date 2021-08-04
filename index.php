<?php 
include_once("config.php");

$c = new Controller();
$c->actionController($_REQUEST['action'],$smarty);
?>