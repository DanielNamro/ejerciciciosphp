<?php

class app{
    public function __construct()
    {
    }
  
    public function run()
    {
      if (isset($_GET['method'])) {
        $method = $_GET['method'];
      } else {
        $method = 'index';
      }
    
   
      $this->potenciados();  
    }



public function potenciados(){
    $potencias = [];
    

    for ($i=1; $i <= 24 ; $i++) { 
          $potencias[] = pow(2,$i);
         // echo("$potencias  ");
         }
         include('views/index.php');
         
    }

public function index()
{
    include('views/index.php');
    include('views/potencias.php');
}
?>