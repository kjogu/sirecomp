<?php
include("../libreria/dbdiagnostico.php");
$uu=usuario();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../libreria/styles.css">
		<link rel="shortcut icon" href="../libreria/images/ico.png" type="image/png">

   </head>

<body>
<div id='todo'>
      <header>
            <hgroup>
                 <img width="170" src="../libreria/images/logo_sidicom.png" alt="SIDICOM">

            </hgroup>
 	<div id="menu">
            <ul id="menu">
				<li><a href='../comunidad/comunidad.php'><img border="0" src='../libreria/images/home.png' width="25" height="25" title="Inicio"></a></li>
                
				
				</li>
				
				<?php 			
				if ($_SESSION["tusuario"]=="Admin")		
				{
				?>				
				
				<?php  			 
				}		 
				?>			 		
				<li><a href='#'><?php echo $uu; ?></a>	
				<ul>
				<li><a href='../index.php'>Cerrar Sesi&oacute;n</a></li>			
				</ul></li>
										
            </ul>
       </div>
      </header>
	<section>
            <div id='infoprin'>   			
                
              <form id="formulario" method='POST'>
		
		<fieldset>
               
                 <table id="tabla" align="center">
							
				  <tr><td>
                <h1>Bienvenidos</h1>
            </td></tr>
				 
			
			
			
				</table> 
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