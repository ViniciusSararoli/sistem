<?php
class Controller
{
  public function actionController($action,$smarty)
  {
    include_once("config.php");

    //if(!($_SESSION['adm']['id']>0)) {
      $smarty->caching = true;
      $smarty->assign("action".$action);

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
        $smarty->display("index.tpl");
        //}
        break;
    }
  }
}
