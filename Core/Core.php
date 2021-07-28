<?php
  class Core {

    public function run() 
    {
        if (isset($_GET['pag'])) 
        {
          $url = htmlentities(addslashes(($_GET['pag'])));
        }

        if (!empty($url)) 
        {
          $url = explode('/', $url);

          $controller = $url[0].'Controller';

          array_shift($url);

          if () 
          {

          }
        }
    }
    
  }
?>