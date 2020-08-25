<?php 
 $conecta=mysqli_connect("localhost","root","","tabla"); 
 if (!$conecta) { 
  echo "Error al conectar la BD"."<br>"; 
 } 
 else 
 { 
  echo "Conexión a la BD satisfactoria"."<br>";  
 } 
?> 