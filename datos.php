<!DOCTYPE html>
<html>
<head>

    <script>
function confirmacion() {
    var pregunta = confirm("¿Deseas ir nuevamente a pagina de registro?")
    if (pregunta){
        alert("Direccionando a pagina de registro")
        window.location = "pagina secundaria.html";
    }
    else{
        alert("Quizás en otro momento...")
    }
}
</script>
	<title></title>
<meta charset="UTF-8"/>
</head>
<body background="imagenes/fm.jpg">
  <formset >
    <fieldset>
<center>
            <h1>Sus Datos De Usuario</h1>
<?php
print "<b>Nombre: </b>".$_POST["nombre"]. "<br>";
print "<b>Direccion email:</b> ".$_POST["email"]. "<br>";
if ($_REQUEST['ciudad']=="Lima")
{
	
}
if ($_REQUEST['ciudad']=="Los olivos")
{
	
}
if ($_REQUEST['ciudad']=="Comas")
{
	
}
if ($_REQUEST['ciudad']=="SJL")
{
	
}
if ($_REQUEST['ciudad']=="Puente piedra")
{
	
}
if ($_REQUEST['ciudad']=="Surco")
{
	
}
if ($_REQUEST['ciudad']=="Miraflores")
{
	
}
if ($_REQUEST['ciudad']=="Chorillos")
{
	
}
if ($_REQUEST['ciudad']=="Rimac")
{
	
}
if ($_REQUEST['ciudad']=="Otros")
{
	
}
print "<b>Ciudad:</b>".$_POST["ciudad"]. ".<br>";

if (is_array($_POST['chk'])) {
        $selected = '';
        $num = count($_POST['chk']);
        $current = 0;
        foreach ($_POST['chk'] as $key => $value) {
            if ($current != $num-1)
                $selected .= $value.', ';
            else
                $selected .= $value.'.';
            $current++;
        }

    echo '<div><b>Aficiones: </b>'.$selected.'</div>';
} 




if ($_REQUEST['optsexo']=="Masculino")
{

}
if ($_REQUEST['optsexo']=="Femenino")
{

}
print "<b>Sexo:</b> ".$_POST["optsexo"]. ".<br>";
print "<b>Su foto:</b>";

if (isset($_POST['enviar'])) {
   $archivo = $_FILES['archivo']['name'];
   if (isset($archivo) && $archivo != "") {
      $tipo = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        if (move_uploaded_file($temp, 'images/'.$archivo)) {
            
            chmod('images/'.$archivo, 0777);
            echo '<p><img src="images/'.$archivo.'"width="130" height="120"></p>';
        }
        else {
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
   }
}
?>

  <form method="post" action="pagina principal.html" onsubmit="return confirmation()">
      <button type="submit" >Salir de registro</button> 
   </form>          
 
    <script type="text/javascript">
     function confirmation() 
     {
        if(confirm("Desea salir?"))
    {
       return true;
    }
    else
    {
       return false;
    }
     }
    </script>
    <button type="button" onclick="confirmacion()" >Regresar a registro</button>
  </center>

      </fieldset>
</formset>
<?php
    include("bd.php");
            $nombre=$_POST['nombre'];
            $direccion=$_POST['email'];
            $ciudad=$_POST['ciudad'];
            $aficiones=$_POST['chk'];
            $optsexo=$_POST['optsexo'];
            $archivo=$_POST['archivo'];
            $insertar="INSERT INTO usuarios(nombre,email,ciudad,chk, optsexo,archivo) VALUES ($nombre','$direccion','$ciudad','$aficiones','$optsexo','$archivo')";
            $resultado= mysql_query($conecta,$insertar);
             echo "<br>"; 
 if (!$resultado) { 
  echo "Error al registrarse"; 
 } 
 else 
 { 
  echo "Usuario registrado"; 
 } 
 mysqli_close($conecta); 
 ?>
</body>
</html>