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

  public function login()
  {
      include('views/index.php');
  }

  public function auth()
  {
      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];

      setcookie("nombre", $nombre, time() + 3600);
      setcookie("apellidos", $apellidos, time() + 3600);


      header("location: index.php?method=home");
  }

  public function home(){

    if (!isset($_COOKIE['nombre'])) {
        header('Location: ?method=login');
        return;
      }
      if (isset($_COOKIE['deseos'])) {
        $deseos = unserialize($_COOKIE['deseos']);
      } else {
        // $deseos = array();
        $deseos = [];
      }
    include('views/home.php');
  }

  public function new(){
    $new = $_POST['new'];

    if (isset($_COOKIE['deseos'])) {
        $deseos = unserialize($_COOKIE['deseos']);
      } else {
        $deseos = [];
      }
      $deseos[] = $new;
      setcookie('deseos', serialize($deseos), time() + 60*60*2);
      header('Location: index.php?method=home');
    }

    public function delete(){
        if (isset($_COOKIE['deseos'])) {
            $deseos = unserialize($_COOKIE['deseos']);
          } else {
            $deseos = [];
          }
          $id = $_GET['id'];
          unset($deseos[$id]);
          setcookie('deseos', serialize($deseos), time() + 60*60*2);
          header('Location: index.php?method=home');
    }

    public function empty(){
        setcookie('deseos', '', time() -1);
        header('Location: index.php?method=home');
    }
    public function cerrar(){
        setcookie('deseos', '', time() -1);
        setcookie('nombre', '', time() -1);
        setcookie('apellidos', '', time() -1);
        header('Location: index.php?method=login');
    }


  }




