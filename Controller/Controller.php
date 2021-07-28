<?php
class Controller
{
  public function actionController($action)
  {
    include_once("config.php");

    //if(!($_SESSION['adm']['id']>0)) {
    $bd = new BD();
    //}

    switch ($action) {
      case 'login':
        $query = "SELECT * FROM users";
        $vetor = $bd->getConection($query);
        var_dump($vetor);

        break;
      default:
        //if(!($_SESSION['adm']['id']>0)) {
        header("Location: http://127.0.0.1:5500/view/index.html");
        //}
        break;
    }
  }
}
