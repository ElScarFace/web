<?php 
 include "bd.php"; 
 $seleccion="Select nombre,email,ciudad,chk,optsexo,archivo from usuarios"; 
 $tabla=mysqli_query($conecta,$seleccion); 
 if (!$tabla) { 
  Echo "Error al acceder a la tabla"."<br>"; 
 } 
 else{ 
  Echo "Acceso a la tabla"."<br>";  
 } 
?> 
<html> 
<head><title>Listado de personal</title></head> 
<body> 
 <h1>Listado de personal</h1> 
 <table width="70%" border="1" align="center"> 
  <tr align="center" bgcolor="99ff66"> 
   <td>id</td> 
   <td>Nombre</td> 
   <td>Direcion</td> 
   <td>Ciudad</td> 
   <td>Aficiones</td> 
   <td>Sexo</td> 
   <td>Foto</td> 
  </tr> 
  <?php 
   while ($registro=$tabla->fetch_array())  
   { 
    ?> 
    <tr> 
     <td><?php echo $registro['id']?></td> 
     <td><?php echo $registro['nombre']?></td> 
     <td><?php echo $registro['email']?></td> 
     <td><?php echo $registro['ciudad']?></td> 
     <td><?php echo $registro['chk']?></td> 
     <td><?php echo $registro['optsexo']?></td>
     <td><?php echo $registro['archivo']?></td>
    </tr> 
   <?php
   } 
   mysqli_close($conecta);
   ?>
 </table> 
</body> 
</html> 