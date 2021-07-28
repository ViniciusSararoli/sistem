<?php
  class Controller 
  {
    public function actionController($action)
    {
      switch ($action) {
        case 'login':
          echo "Página OK";
          break;
        default:
          echo "Página não encontrada";
          break;
      }
    }
  }
?>