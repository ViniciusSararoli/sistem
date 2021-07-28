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
  public function getIdlogin()
  {
    return $this->idlogin;
  }
  public function setIdlogon($idlogin)
  {
    $this->idlogin = $idlogin;
  }
}