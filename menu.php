<?php session_start();
if(!isset($_SESSION["nombre"]))
{
header("Location:error.php");
}
else
{
$nombre=$_SESSION["nombre"];
mysql_connect("localhost" , "admin" , "adminadmin");
mysql_select_db("nombreBd");
$sql= "Select * from usuarios where nombre='$nombre'";
$r=mysql_query($sql);
$row=mysql_fetch_array($r)or die(mysql_error());
/* echo $sql; */
echo "<h3>",'Bienvenid@'."&nbsp;" . $nombre =$_SESSION ["nombre"];
echo "&nbsp;!!</h3>MIS DATOS:&nbsp;
<a href='cerrar.php'>Cerrar sesion</a><br><br>";
echo "<table border='1'>";
echo "<tr><td><b>Nombre:</b>".$row["nombre"],"<br></td></tr>";
echo "<tr><td><b>Apellidos:</b> ".$row["apellidos"],"</td></tr>";
echo "<tr><td><b>DNI:</b> ".$row["dni"],"</td></tr>";
echo "<tr><td><b>Telefono:</b> ".$row["telefono"],"</td></tr>";
echo "<tr><td><b>Email:</b> ".$row["email"],"</td></tr>";
echo "<tr><td><b>Pass: </b>".$row["pass"];
echo "&nbsp;&nbsp;<a href='modificar.php'>Modificar</a>";
echo "</td></tr></tabla>";
}
?>
