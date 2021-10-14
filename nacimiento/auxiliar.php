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
  //Esta función compruebo si la variable get contiene algo después creo un objeto DateTime con lo que recojo del $get  (1992-12-29) después creo un objeto Datetime pasandole la fecha actual y después al la fecha de entrada le resto la fecha actual la cual en $interval se guarda un objeto Dateinterval el cual accedo a una propiedad de el (y) que devuelve el año.
 

  function calculaEdad():?int
  {
    if(isset($_GET["fechanacimiento"])){
        /* $datos = $_GET["fechanacimiento"];
        $dtentrada = new DateTime($datos);
        $fechaactual = new DateTime(date("Y-m-d"));  
        $interval = $dtentrada->diff($fechaactual);
        $x = $interval->y;
        return $x; */
        return (new Datetime())->diff(new DateTime($_GET["fechanacimiento"]))->y;
    }else{ return null;}
    
  }

  function depurarTexto(String $texto)
  { 
    if(!is_numeric($texto)){
      $trim = trim($texto);
      return $trim;
    }else{$error = "Debes introducir una cadena de texto";
      return $error;}
  }

