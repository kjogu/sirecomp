<?php
include("libreria/dbdiagnostico.php");


 $ms="";
   session_start();
  $_SESSION["nusuario"]="0";
  $_SESSION["tusuario"]="0";
  if (isset($_POST["login"]))
   {
		$u=$_POST["login"];
		$c=$_POST["pass"];
		//$x=buscarvalor("nombrecompleto","usuarios","login='$u' and clave='$c'");
		//$y=buscarvalor("tipo","usuarios","login='$u' and clave='$c'");
		
		$b=new consultas();
		$x= $b->buscarvalor("usuarios","idusuario","idusuario='$u' and decode(clave,'asdfg')='$c'");
		 		
				
		if ($x!="" or $x!=null)
		{
			$tt= $b->buscarvalor("usuarios","tipo","idusuario='$u' and decode(clave,'asdfg')='$c'");
		
		    $_SESSION["nusuario"]=$x;
			$_SESSION["tusuario"]=$tt;
		    if ($_SESSION["tusuario"]=="Admin")
			{
			header("location:/sirecom/admon/admon.php");
			}
			else
			{
  			header("location:/sirecom/comunidad/index.php");
			}
		}
		else
		{ 
			$ms="USUARIO O CLAVE INCORRECTO";
		}
		 
   }

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="../libreria/images/ico.png" type="image/png">
		<link rel="stylesheet" href="libreria/styles.css">
		
   </head>

<body>
<div id='todo'>
      <header>
            <hgroup>
                <img width="170" src="libreria/images/logo_sidicom.png" alt="SIDICOM">
            </hgroup>
 	
      </header>
	<section>
            <div id='infoprin'>   			
                
              <form id="formusuario" method='POST' action="index.php" >
		
		<fieldset>
                <center>
                <h1>Iniciar Sesi&oacute;n<h1>
                
                 <table id="tabla" align="center">
		 <tr>
				<td><b>Login:</b></td>
				<td>
				<input type="text" name="login">
				</td>
				 </tr>
		
		 <tr>
				<td>
				<b>Password:</b></td>
				
				
				<td>
				<input type="password" name="pass"><br>
				 
				 <?php
				 echo @$ms;
				?>
				 
				 </td></tr>
			
				
				 
			<tr><td>
			<div align="center">
			<td><input type=image src='libreria/images/profile.png' id="nuevo" name="nuevo" value="guardar" title="Guardar">
			</td></div></tr>
			
				</table> 
				</center>
				</form>
				
        </div>
      </section>   
	  <footer id="footer" align="center">		
			<br>
			<a href='../libreria/licencia.txt' target="_blank">
			Licencia P&uacute;blica General GNU publicada 
			por Fundaci&oacute;n para el Software Libre
			<br>SIRECOM&#174;</a>			
			</footer>
    </div>
   </body>
</html>