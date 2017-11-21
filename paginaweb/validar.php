
<?php
$usuario=$_post['usuario'];
$clave=$_post['clave'];
//conectar a la base de datos:
$conexion=mysql_connect("localhost", "root", "", "bdprueba");
$consulta="select * from usuarios were usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas >0) {
	header("location:bienvenido.html");
else {
	echo "Error!!,Intente de nuevo";
}
mysql_free_result($resultado);
mysqli_close($conexion);
