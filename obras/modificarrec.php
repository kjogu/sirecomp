<?php
include("../libreria/dbdiagnostico.php");

$uu=usuario();
//buscar el reg a modif
if (isset($_GET['id']))
	{
			
		$id=$_GET['id'];
		$b=new consultas();
		$modidti=$b->buscarvalor("recreacion","idtiporecre","idrecreacion='$id'");
		$modno=$b->buscarvalor("recreacion","nombre","idrecreacion='$id'");
		$modcb=$b->buscarvalor("recreacion","cbask","idrecreacion='$id'");
		$modcf=$b->buscarvalor("recreacion","cfot","idrecreacion='$id'");
		$modcv=$b->buscarvalor("recreacion","cvol","idrecreacion='$id'");
		$modco=$b->buscarvalor("recreacion","cotra","idrecreacion='$id'");
		$modfr=$b->buscarvalor("recreacion","frevisita","idrecreacion='$id'");
		$modvi=$b->buscarvalor("recreacion","visitantes","idrecreacion='$id'");
		$modfu=$b->buscarvalor("recreacion","fundacion","idrecreacion='$id'");
		$modidco=$b->buscarvalor("recreacion","idcondicion","idrecreacion='$id'");
		$modidte=$b->buscarvalor("recreacion","idterreno","idrecreacion='$id'");
		$modidob=$b->buscarvalor("recreacion","idcomunidad","idrecreacion='$id'");
				
			
	}
 	if (isset($_GET['idb']))
	{
			
		$id=$_GET['idb'];
		$b=new acciones();
		$mod1=$b->borrar("recreacion","idrecreacion='$id'");
		 echo "<script>alert('Datos borrados');</script>";		
			
	}

?>
<html>
    <head>
        <title>Recreaci&oacute;n</title>
        <link rel='stylesheet' href='../libreria/styles.css'>
		<link rel="shortcut icon" href="../libreria/images/ico.png" type="image/png">
        <script src='#'></script>
        <script src='#'></script>
    </head>
   
   <body>
   <div id='todo'>
   <header>
            <hgroup>
                 <img width="170" src="../libreria/images/logo_sidicom.png" alt="SIDICOM">

            </hgroup>
			
		<div id="menu">
            <ul>
                <li><a href='../comunidad/comunidad.php'>Comunidad</a>
				<ul>
				<li><a href='../comunidad/calle.php'>Calle</a></li>
				</ul></li>
				
				<li><a href='../produccion/produccion.php'>Familias</a>
				<ul>
				<li><a href='../produccion/produccion.php'>Producci&oacute;n</a></li>
				<li><a href='../familiavivi/persona.php'>Persona</a></li>
				<li><a href='../familiavivi/vivienda.php'>Vivienda</a></li>
				</ul></li>
				
				<li><a href='../adescos/adesco.php'>ADESCO</a>
				<ul>
				<li><a href='../adescos/lideres.php'>Lideres</a></li>
				</ul></li>
				
				<li><a href='../obras/comunal.php'>Obras Sociales</a>
				<ul>
				<li><a href='../obras/comunal.php'>Comunal</a></li>
				<li><a href='../obras/escuela.php'>I. Educativas</a></li>
				<li><a href='../obras/salud.php'>Salud</a></li>
				<li><a href='../obras/recreacion.php'>Recreaci&oacute;n</a></li>
				</ul></li>
				
				<li><a href='../ambiente/flora.php'>Medio Ambiente</a>
				<ul>
				<li><a href='../ambiente/flora.php'>Flora</a></li>
				<li><a href='../ambiente/fauna.php'>Fauna</a></li>
				<li><a href='../ambiente/agua.php'>Agua</a></li>
				<li><a href='../ambiente/clima.php'>Clima</a></li>
				</ul></li>
				
				<li><a href='../riesgo/riesgo.php'>Riesgos Amenazas</a>
				<ul>
				<li><a href='../riesgo/planemer.php'>Plan</a></li>
				</ul></li>
				
				<li><a href='../cooperantes/cooperantes.php'>Cooperantes</a>
				<ul>
				<li><a href='../cooperantes/proyectos.php'>Proyectos</a></li>
				</ul></li>
				
				<?php 			
				if ($_SESSION["tusuario"]=="Admin")		
				{
				?>				
				<li><a href='../admon/admon.php'>Mantenimiento</a>
				</li>
				<?php  			 
				}		 
				?>			 		
				<li><a href='#'><?php echo $uu; ?></a>	
				<ul>
				<li><a href='../index.php'>Cerrar Sesi&oacute;n</a></li>			
				</ul></li>
            </ul><ul>
                <li><a href='#'>Comunidad</a>
				<ul>
				<li><a href='../comunidad/comunidad.php'>Agregar</a></li>
				</ul></li>
				
				<li><a href='#'>Calle y Avenida</a>
				<ul>
				<li><a href='../comunidad/calle.php'>Agregar</a></li>
				</ul></li>
				
				<li><a href='../produccion/produccion.php'>Familias</a>
				<ul>
				<li><a href='../familiavivi/vivienda.php'>Nueva Vivienda</a></li>
				<li><a href='../familiavivi/persona.php'>Nueva Familia</a></li>
				<li><a href='../produccion/produccion.php'>Nueva Producci&oacute;n</a></li>
				</ul></li>
				
				<li><a href='#'>ADESCO</a>
				<ul>
				<li><a href='../adescos/adesco.php'>Agregar </a></li>
				<li><a href='../adescos/lideres.php'>Agregar Lideres</a></li>
				</ul></li>
				
				<li><a href='#'>Obras Sociales</a>
				<ul>
				<li><a href='../obras/comunal.php'>Agregar Comunal</a></li>
				<li><a href='../obras/escuela.php'>Agregar I. Educativas</a></li>
				<li><a href='../obras/salud.php'>Agregar I. Medicas</a></li>
				<li><a href='../obras/recreacion.php'>Aregar Recreaci&oacute;n</a></li>
				</ul></li>
				
				<li><a href='#'>Medio Ambiente</a>
				<ul>
				<li><a href='../ambiente/flora.php'>Agregar Flora</a></li>
				<li><a href='../ambiente/fauna.php'>Agregar Fauna</a></li>
				<li><a href='../ambiente/agua.php'>Agregar Agua</a></li>
				<li><a href='../ambiente/clima.php'>Agregar Clima</a></li>
				</ul></li>
				
				<li><a href='#'>Riesgos Amenazas</a>
				<ul>
				<li><a href='../riesgo/riesgo.php'>Agregar</a></li>
				<li><a href='../riesgo/planemer.php'>Agregar Plan</a></li>
				</ul></li>
				
				<li><a href='#'>Instituciones</a>
				<ul>
				<li><a href='../cooperantes/cooperantes.php'>Agregar</a></li>
				<li><a href='../cooperantes/proyectos.php'>Agregar Proyectos</a></li>
				</ul></li>
				
				<?php 
				if ($_SESSION["tusuario"]=="Admin")
				{
				?>
				<li><a href='../admon/admon.php'>Mantenimiento</a>
				</li>
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
						
						<form action="modificarrec.php" method="get">
						<table>
						<tr><td><b>Busquedad seg&uacute;n Codigo:</b></td><td><input type="text" name="id" size="4" title="Digite Codigo"></td>
						<td><input type=image src="../libreria/images/vacancy.png" name="bu1"  id="bu1" value="buscar" title="Buscar"></td></tr>
						<tr><td>
						</table>
						</form>
<?php


	if (isset($_GET['id']))
	{
?>	
        <div id='infoprin'>  
		<form class="comunidad" method="POST" action="modificarrec.php" >
			<fieldset>
                <legend>
               Datos de la Zona de Recreaci&oacute;n
                </legend>
			
			<table id="tabla">
			
			<tr><td><label> Codigo:</label></td>
			<td><input type="text" name="codigo" id="codigo" value="<?php echo $id; ?>" readonly></td></tr>
			
			<tr><td><label>Tipo de Recreacion:</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->modselectdetabla("tiporecre","tipo","idtiporecre",$modidti);
			     ?></td></tr>
			
			<tr><td><label>Nombre:</label></td>
			<td><input type="text" name="nombre" value="<?php echo $modno; ?>" required="required" placeholder= 'Nombre Completo' title='Nombre Completo'></td></tr>
                     
			<tr><td><label>Canchas Disponibles:</label></td>
			<td>Basketball<input type="textbox" size='10' name="cba" value="<?php echo $modcb; ?>" placeholder= 'Digite Cantidad' title='Digite Cantidad Posee'></td>
			<td>Fotball <input type="textbox" size='10' name="cfo" value="<?php echo $modcf; ?>" placeholder= 'Digite Cantidad' title='Digite Cantidad Posee'></td>
			<td>Volleyball <input type="textbox" size='10' name="cvo" value="<?php echo $modcv; ?>" placeholder= 'Digite Cantidad' title='Digite Cantidad Posee'></td>
			<td>Otra <input type="textbox" size='10' name="cot" value="<?php echo $modco; ?>" placeholder= 'Digite Tipo Cancha y Cantidad' title='Digite Tipo Cancha y Cantidad'></td></tr>
			            
			<tr><td><label>Frecuencia de Visitas:</label></td>
			<td><input type="text" name="fvisitas" value="<?php echo $modfr; ?>" required="required" placeholder='Digite D&iacute;a' title='Digite D&iacute;a Semana'></td></tr>
            
			<tr><td><label>Visitantes:</label></td><td>
			<input type="text" name="visitante" value="<?php echo $modvi; ?>" required="required" placeholder='Quienes' title='Quienes'></td></tr>
            
			<tr><td><label>Fecha de Fundaci&oacute;n:</label></td>
			<td><input type="date" name="fechafu" value="<?php echo $modfu; ?>" required="required" placeholder='Fecha Ignauraci&oacute;n' title='Fecha Ignauraci&oacute;n'></td></tr>
             
			<tr><td><label>Terreno:</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->modselectdetabla("terreno","tipo","idterreno",$modidte);
			     ?></td></tr>
			
			<tr><td><label>Condici&oacute;n Infraestructura:</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->modselectdetabla("condicion","condicion","idcondicion",$modidco);
			     ?></td></tr>
				 
			<<tr><td><label title="Elegir Comunidad">Comunidad:</label></td>
			<td>
			<?php
			$b=new consultas();
			echo $b->modselectdetabla("comunidad","nombre","idcomunidad",$modidob);
			?></td></tr>
			
			</table> 
			
			<table width="50%" border="0" align="center" cellpadding="10" cellspacing="0">
			<tr>
			<td><div align="center">
			<td><input type=image src='../libreria/images/save.png' id="nuevo" name="nuevo" value="guardar" title="Guardar"></td>
			</div></td>
			</tr>
				</table>
					</fieldset>			 
				</form>	
			</div>
		</div>
		
		<?php 
		}
			if (isset($_POST["codigo"]))
			{
				$a=$_POST["codigo"];
				$b=$_POST["idtiporecre"];
				$c=$_POST["nombre"];
				$d=$_POST["cba"];
				$e=$_POST["cfo"];
				$f=$_POST["cvo"];
				$g=$_POST["cot"];
				$h=$_POST["fvisitas"];
				$i=$_POST["visitante"];
				$j=$_POST["fechafu"];
				$k=$_POST["idterreno"];
				$l=$_POST["idcondicion"];
				$m=@$_POST["idcomunidad"];

				$mov=new acciones();
				echo $mov->Modificar("recreacion","idtiporecre='$b',nombre='$c',cbask='$d',cfot='$e',cvol='$f',cotra='$g',frevisita='$h',visitantes='$i',fundacion='$j',idcondicion='$k',idterreno='$l',idcomunidad='$m'","idrecreacion='$a'");
				}	?>
							
			<footer id="footer" align="center">		
			<br>
			<a href='../libreria/licencia.txt' target="_blank">
			Licencia P&uacute;blica General GNU publicada 
			por Fundaci&oacute;n para el Software Libre
			<br>SIREOM&#174;</a>			
			</footer>
    </body>
</html>