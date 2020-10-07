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
    
   
      $this->$method();  
    }



public function potenciados(){
    $potencias = [];
    

    for ($i=1; $i <= 24 ; $i++) { 
          $potencias[] = pow(2,$i);
         // echo("$potencias  ");
         }
         include('views/potencias.php');
         
    }

public function fibonacci(){
$num1 = 1;
$num2 = 0;
$conten = [];
while($num1<1000000 || $num2<1000000){
    $suma = $num1+$num2;
    $num1 = $num2;
    $num2 = $suma;
    $conten[] = $num2;
}

    include('views/fibonacci.php');
}

public function index()
{
    include('views/index.php');
    
    
}
}
