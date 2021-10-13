<?php
 /* function calculaanyos(){
     if(isset($_GET["fechanacimiento"])){
         $datos = $_GET["fechanacimiento"];
         $elementos=explode("/",$datos);
         $año = $elementos[2];
         $añoactual = date("Y");
         return $añoactual - $año;
     }
    } 
  */
 function depuraFechaEntrada()
 {
    if(isset($_GET["fechanacimiento"])){
       
        
        $datos = $_GET["fechanacimiento"];
        $elementos=explode("-",$datos);
        return $elementos;
    }
 }  

 $elementos = depuraFechaEntrada();
 $year = intval($elementos[0]) ;
 $month = intval($elementos[1]);
 $day = intval($elementos[2]);

$dtentrada = new DateTime();
$dtentrada->setDate($year,$month,$day);
//utilizar el date para coger la fecha actual