<?php
class Controller
{
  public function actionController($action, $smarty)
  {
    include_once("config.php");

    
    if (($_SESSION['adm']['id'] > 0)) {
      $bd = new BD();
      $smarty->caching = true;
      $smarty->assign($action);
      //$smarty->assign("action" . $action);
    }
    //var_dump($action);
    switch ($action) {
      case 'login':
        //$bd = new BD();
        $adm = new Users();
        var_dump($adm);
        $adm->email = $_POST['email'];
        $adm->password = $_POST['password'];
        $adm->login();
        die;

        header("Content-type:application/json");
        if ($adm->idadm > 0) {
          $_SESSION['adm']['id'] = $adm->idadm;
          echo json_encode(array("resposta" => "ok"));
        } else {
          echo json_encode(array("resposta" => "erro"));
          die;
        }
        break;
      case "sair":
        unset($_SESSION['adm']);
        echo "<script>location.href='?acao='</script>";
        break;
      default:
        //$query = "SELECT us.idlogin FROM users as us WHERE us.email='".$_POST['email']."' and us.password='".$_POST['password']."' limit 1";
        //$vetor = $bd->getConection($query);
        //var_dump($vetor);
        if (!($_SESSION['adm']['id'] > 0)) {
          $smarty->display("login.tpl");
          die;
        }
        $smarty->display("index.tpl");
        break;
    }
  }
}
