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
 	<div>
            <ul id="menu">
				<li><a href='../comunidad/comunidad.php'><img border="0" src='../libreria/images/home.png' width="25" height="25" title="Inicio"></a></li>
                
				<li><a href='#'>Direcci&oacute;n</a>
				<ul>
				<li><a href='../addireccion/zona.php'>Zona</a></li>
				<li><a href='../addireccion/sector.php'>Sector</a></li>
				<li><a href='../addireccion/limitegeo.php'>Limite Geografico</a></li>
				<li><a href='../addireccion/depa.php'>Departamento</a></li>
				<li><a href='../addireccion/municipio.php'>Municipio</a></li>
				</ul></li>
				
				<li><a href='#'>Persona</a>
				<ul>
				<li><a href='../adpersona/nivelacad.php'>Nivel Academico</a></li>
				<li><a href='../adpersona/ocupacion.php'>Ocupaci&oacute;n</a></li>
				<li><a href='../adpersona/parentezco.php'>Parentezco</a></li>
				</ul></li>
				
				<li><a href='#'>ADESCO</a>
				<ul>
				<li><a href='../adadesco/cargo.php'>Cargo</a></li>
				</ul></li>
				
				<li><a href='#'>Obras Sociales</a>
				<ul>
				<li><a href='../adobra/condicion.php'>Condici&oacute;n</a></li>
				<li><a href='../adobra/instedu.php'>Instituci&oacute;n</a></li>
				<li><a href='../adobra/terreno.php'>Terreno</a></li>
				<li><a href='../adobra/tiporecre.php'>Tipo Recreaci&oacute;n</a></li>
				<li><a href='../adobra/tiposalud.php'>Tipo Salud</a></li>
				
				</ul></li>
				
				<li><a href='#'>Medio Ambiente</a>
				<ul>
				<li><a href='../adambiente/especieflora.php'>Especie Flora</a></li>
				<li><a href='../adambiente/especiefauna.php'>Especie Fauna</a></li>
				<li><a href='../adambiente/tiporeagua.php'>Recurso Agua</a></li>
				
				</ul></li>
				
				<li><a href='#'>Producci&oacute;n</a>
				<ul>
				<li><a href='../adproduccion/tipoproduce.php'>Tipo Produce</a></li>
				</ul></li>
				
				<li><a href='#'>Vivienda</a>
				<ul>
				<li><a href='../advivienda/tipovivi.php'>Tipo Vivienda</a></li>
				<li><a href='../advivienda/tipoletrina.php'> Tipo Letrina</a></li>
				<li><a href='../advivienda/tipocalle.php'>Tipo Calle</a></li>
				</ul></li>
				
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
                
             
		
		<fieldset>
             <h1>
                Bienvenido <br>Mantenimiento Interno
               </h1>

		      </fieldset>
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