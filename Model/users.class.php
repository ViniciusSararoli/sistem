<?php
class Users
{
  private $idlogin;
  private $nome;
  private $email;
  private $password;
  private $bd;

  public function Users()
  {
    include_once("config.php");
    $this->bd = BD::getConection($query);
  }
  public function __get($name)
  {
    if ($name == 'idlogin') {
      return $this->idlogin;
    }
    if ($name == 'email') {
      return $this->email;
    }
    if ($name == 'password') {
      return $this->password;
    }
  }
  public function __set($name, $value)
  {
    if (strlen($value) > 0) {
      if ($name == 'idlogin') {
        $this->idlogin = $value;
      }
      if ($name == 'email') {
        $this->email = $value;
      }
      if ($name == 'password') {
        $this->password = $value;
      }
    }
  }
  public function login()
  {
    $sql = 'select * from users where  ' .
      'login="' . $this->bd->mysql_escape_string($this->login, $this->bd->getLInk()) . '" and senha="' . $this->bd->mysql_escape_string($this->senha, $this->bd->getLInk()) . '"';
    $vetor = $this->bd->resultSet($sql);
    $this->idlogin = $vetor[0]['idadm'];
    //$this->nome=$vetor[0]['nome'];
    $this->email = $vetor[0]['login'];
    $this->password = $vetor[0]['senha'];
    //$this->dia=$vetor[0]['dia'];
  }
  public function getIdlogin()
  {
    return $this->idlogin;
  }
  public function setIdlogon($idlogin)
  {
    $this->idlogin = $idlogin;
  } 
}
