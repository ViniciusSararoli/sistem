<?php 
  class BD 
  {
    public static function getConection($query)
    {
      include "conection.php";
          $bd = new BD();

      $registros = mysqli_query($con, $query) or die("Erro na celeção dos dados." . mysqli_error($con));
        $linhas = mysqli_num_rows($registros);

        if ($linhas < 1) {
          die("Vazio.");
        }
        for ($i=0; $i < $linhas; $i++) {
          $dados[$i] = mysqli_fetch_array($registros);
        }
        return $dados;
    }
  }
