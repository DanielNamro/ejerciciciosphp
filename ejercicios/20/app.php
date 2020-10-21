<?php

class app
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
            $method = 'login';
        }


        $this->$method();
    }

    public function login()
    {
        include('views/index.php');
    }

    public function auth()
    {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];

        $_SESSION['name'] = $nombre;
        $_SESSION['apellidos'] = $apellidos;


        header("location: index.php?method=home");
    }
    public function home()
    {

        include('views/home.php');

        //echo "  $vaina  <br> ";
    }

    public function logout()
    {
        session_destroy();
        header('Location: index.php');    
    }

   


}
