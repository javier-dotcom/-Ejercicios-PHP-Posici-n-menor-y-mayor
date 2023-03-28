<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    body{
      text-align: center;
        background-color:rgb(108, 30, 50);
        color:aquamarine;
        width: 90%;
        margin:auto;
        font-size:13px;
       

    }
    p{
      background-color: rgb(70, 13, 27);
      padding:3px;
    }
    .resul{
      background-color: rgb(70, 13, 27);
      padding:3px;
     
    }
    spam{
      color:white;
    }
    table,
    tr,
    td{
      border: black 6px solid;
      padding:3px;
    }
    td{
     background-color:black;
      border: black 6px solid;
    }
    .enunciado{
      font-size:large;
      color:bisque;
    }

  </style>
</head>
<body>
  <h1 class="resul">Ejercicio PHP</h1>
  <p class="enunciado">Realiza un programa que rellene un array de 6 filas por 10 columnas con números enteros positivos
     comprendidos entre 0 y 1000 (ambos incluidos). Verificar que no se repita ningún número.
      A continuación, el programa deberá dar la posición tanto del máximo como del mínimo. 
</p>
<form action="Ejercicio_115.php">
  <button type="submit" name="actualizar">Actualizar</button>
  </form>



<?php
if(isset($_GET["actualizar"])){
/*esta funcion genera ubn array simple si repeticiones y lo retorna*/
function array_sin_rep(){
$aux=0;
$array_simple=array();
for ($e = 1; $e <= 60; $e++){
      $aux=rand(0,1000);
     while (in_array($aux,$array_simple)){
        $aux=rand(1,60);
      }
      $array_simple[$e]=$aux;
    }
return $array_simple;
}
/* ahora invocamos a la funcion y el resultado se guarda en $a*/
$a= array_sin_rep();
/* aca lo ordené y lo imprimi para comprobar que no haya repeticiones, esto se deberia borra*/
/*foreach ($a as $key ) {
 echo "&nbsp &nbsp" . $key . "&nbsp &nbsp";
}*/
 echo "<br>";
 echo "<br>";
$max=1;
$min=max($a); 
/* aca cargo e imprimo el array bidimensional con el array simple el($a),*/
 /*la variable $u es para recorrer el array simple*/
  $u=1; 
          
for ($i=1; $i <=6 ; $i++) { 
  echo "<br>";
  echo"<table><tr>";
  for ($e=1; $e <=10 ; $e++) { 
 $array_bi[$i][$e]=$a[$u];

echo " <td>Fila ($i) Colum ($e) : <spam>" . $array_bi[$i][$e] . "</spam> &nbsp;&nbsp; </td>";

 $aux=$max;
 if ($array_bi[$i][$e]>$max){
   $max=$array_bi[$i][$e];
   $maxposi= "Columna = $e &nbsp; Fila = $i";
 }
 elseif($array_bi[$i][$e]<$min){
   $min=$array_bi[$i][$e];
   $minposi= " Columna = $e &nbsp; Fila = $i ";
 }
    $u++;
  }
  echo"</tr></table>";
}

echo "<br>";
echo "<br>";
echo "<div class='resul'>";

echo "<h3>El maximo es<spam> $max </spam>y su posicion es<spam> $maxposi</spam> </h3>";
 echo "<br>";
echo "<h3>El minimo es <spam>$min</spam> y su posicion es <spam> $minposi</spam></h3>";
echo "</div> ";
echo "<br>";

 }






/* for ($e = 1; $e <= 6; $e++){
    echo "<br>";
  for ($i = 1; $i <= 10; $i++){
    
echo $array_bi[$e][$i]. "&nbsp--";

}
}*/
?>


</body>
</html>




