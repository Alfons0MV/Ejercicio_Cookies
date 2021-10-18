<?php 
include 'head.php';
$usuario="";
$pass="";

echo'<h1>Autenticar usuario y guardar en una cookie con PHP</h1><br><br>';
echo'<form action="cookies_3.php" method="post">
<table>
<tr>
<td>Usuario:</td>
<td><input type="text" name="usuario" value="'.$usuario.'"required></td>
</tr><tr>
<td>Clave:</td>
<td><input type="password" name="clave" value="'.$pass.'" required></td>
</tr><tr>
<td colspan="2"><input type="checkbox" name="guardar_clave" value="1"> Memorizar el usuario en este ordenador</td>
</tr><tr>

<td><input type="submit" name="entrar" value="Entrar"></td>
</tr>
</table>
</form> ';

if(isset($_REQUEST['entrar'])) //pulsamos entrar
{
    if(isset($_REQUEST['guardar_clave'])) //pulsamos guardar clave
    {
        setcookie("usuario", $_REQUEST['usuario'], time()+3600);
        setcookie("clave", $_REQUEST['clave'], time()+3600);
    }

} //fin de entrar

if(isset($_COOKIE['usuario'])) {
    $usuario= $_COOKIE['usuario'];
    $pass= $_COOKIE['clave'];
}

include 'pie.php';