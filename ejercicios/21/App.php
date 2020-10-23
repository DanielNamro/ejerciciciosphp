<?php

class App
{
  public function __construct()
  {
    session_start();    
  }
  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'index';
    }
  
    $this->$method();      
  }
  public function index()
  {
    include('views/index.php');
  }
  public function login(){
    include('views/index.php');
  }
  public function auth(){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];

    $_SESSION['name'] = $nombre;
    $_SESSION['apellidos'] = $apellidos;
    header("location: index.php?method=home");
  }

  public function home(){
      $deseos = $_SESSION['deseos'];
    include('views/home.php');
  }

  public function new(){
    if (isset($_POST['new']) && !empty($_POST['new'])) {
        $new = $_POST['new'];
        $deseos = $_SESSION['deseos'];
        $deseos[] = $new;
      $_SESSION['deseos'] = $deseos;
      } 
      
      header('Location: index.php?method=home');
  }

  public function close(){
      session_destroy();
      header('Location: index.php?method=home');
  }
  public function empty(){
    unset($_SESSION['deseos']);
    header('Location: index.php?method=home');
  }
  public function delete(){ 
    if (isset($_SESSION['deseos'])) {
        $deseos = $_SESSION['deseos'];
      } else {
        $deseos = [];
      }
    $id = $_GET['id'];
    unset($deseos[$id]);
    header('Location: index.php?method=home');
  }

}