<?php
include("../libreria/dbdiagnostico.php");
$uu=usuario();
?>

<?php
        $ms="";
        if (isset($_POST["nuevo"]))
        {
        if ($_POST["nuevo"]=="guardar")
                { 
                $a=$_POST['codigo'];
				$b=$_POST['idtiporecre'];
				$c=$_POST['nombre'];
				$d=$_POST['cba'];
				$e=$_POST['cfo'];
				$f=$_POST['cvo'];
				$g=$_POST['cot'];
				$h=$_POST['fvisitas'];
				$i=$_POST['visitante'];
				$j=$_POST['fechafu'];
				$k=$_POST['idterreno'];
				$l=$_POST['idcondicion'];
				$m=$_POST['idcomunidad'];

				$mov=new acciones();
				$ms= $mov->guardar("recreacion","idrecreacion,idtiporecre,nombre,cbask,cfot,cvol,cotra,frevisita,visitantes,fundacion,idcondicion,idterreno,idcomunidad","'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m'");
				}
            }
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
<div id="todo">
      <header>
            <hgroup>
                 <img width="170" src="../libreria/images/logo_sidicom.png" alt="SIDICOM">

            </hgroup>
 	 <div id="menu">
            <ul>
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
	<section>
            <div id='infoprin'>   			
                
              <form id="formulario" method='POST'>
		<nav id="menu2">
                    <table id="otromenu">
			<td><input type=image src="../libreria/images/forms.png" id="nuevo" name="nuevo" value="modificar" title="Modificar" onclick="location.href='modificarrec.php';"></td>
			<td><input type=image src='../libreria/images/save.png' id="nuevo" name="nuevo" value="guardar" title="Guardar"></td>
			<td><input type=image src='../libreria/images/printer.png' id="nuevo" name="nuevo" value="imprimir" title="Imprimir" onclick="location.href='../impresion/inicio.php';"></td>
			<td><input type=image src='../libreria/images/info.png' id="nuevo" name="nuevo" value="ayuda" title="Ayuda" onclick="window.open (href='../libreria/ManualUsuario.pdf')"></td></tr>				
                    </table>
		</nav>
		<fieldset>
                <legend>
                Recreacion y Zona Verde
                </legend>
                 <table id="tabla">
			
			<tr><td><label> Codigo:</label></td>
			<td><input type="text" name="codigo" id="codigo" value="<?php echo newid("recreacion","idrecreacion"); ?>" readonly></td></tr>
			
			<tr><td><label>Tipo de Recreacion:</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->selectdetabla("tiporecre","tipo","idtiporecre");
			     ?></td></tr>
			
			<tr><td><label>Nombre:</label></td>
			<td><input type="text" name="nombre" value="" required="required" placeholder= 'Nombre Completo' title='Nombre Completo'></td></tr>
                     
			<tr><td><label>Canchas Disponibles:</label></td>
			<td>Basketball<input type="textbox" size='10' name="cba" value="" placeholder= 'Digite Cantidad' title='Digite Cantidad Posee'></td>
			<td>Fotball <input type="textbox" size='10' name="cfo" value="" placeholder= 'Digite Cantidad' title='Digite Cantidad Posee'></td>
			<td>Volleyball <input type="textbox" size='10' name="cvo" value="" placeholder= 'Digite Cantidad' title='Digite Cantidad Posee'></td>
			<td>Otra <input type="textbox" size='10' name="cot" value="" placeholder= 'Digite Tipo Cancha y Cantidad' title='Digite Tipo Cancha y Cantidad'></td></tr>
			            
			<tr><td><label>Frecuencia de Visitas:</label></td>
			<td><input type="text" name="fvisitas" value="" required="required" placeholder='Digite D&iacute;a' title='Digite D&iacute;a Semana'></td></tr>
            
			<tr><td><label>Visitantes:</label></td><td>
			<input type="text" name="visitante" value="" required="required" placeholder='Quienes' title='Quienes'></td></tr>
            
			<tr><td><label>Fecha de Fundaci&oacute;n:</label></td>
			<td><input type="date" name="fechafu" value="" required="required" placeholder='Fecha Ignauraci&oacute;n' title='Fecha Ignauraci&oacute;n'></td></tr>
             
			<tr><td><label>Terreno:</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->selectdetabla("terreno","tipo","idterreno");
			     ?></td></tr>
			
			<tr><td><label>Condici&oacute;n Infraestructura:</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->selectdetabla("condicion","condicion","idcondicion");
			     ?></td></tr>
				 
			<tr><td><label title="Elegir Comunidad">Comunidad:</label></td>
			<td>
			<?php
			$b=new consultas();
			echo $b->selectdetabla("comunidad","nombre","idcomunidad");
			?></td></tr>
			
			</table> 
					</fieldset>			 
				</form>		
				                                
			<?php if ($ms!='') echo " <script>alert('$ms');</script>"; ?>

						<section>
						<div id="formulario2">
						<fieldset>
						
						<form action="recreacion.php" method="get">
						<table>
						<tr><td><b>Busquedad seg&uacute;n Codigo:</b></td><td><input type="text" name="bu" size="4" title="Digite Codigo"></td>
						<td><input type=image src="../libreria/images/vacancy.png" name="bu1"  id="bu1" value="buscar" title="Buscar"></td></tr>	
						<tr><td>
						
			<?php

			if (isset($_GET['bu']))
			{  //para buscar
				$ii=$_GET['bu'];
				
				$b=new consultas();
				echo $b->buscarvalor("recreacion","nombre","idrecreacion='$ii'");
			}

			//Guardar
			?>
			</td></tr>
						</table>
						</form>
						</fieldset>
						</div>
						</section>
			<section>
			<div id="formulario2">
			<fieldset>
                <legend>
               Consultar
                </legend>
			<?php

			$con=new consultas(); 
			//tabla , campo y condicion 
		
			echo "<br>";

			echo $con->consultar("recreacion,tiporecre,terreno,condicion,comunidad","recreacion.idrecreacion as 'ID',tiporecre.tipo as 'Tipo',recreacion.nombre as 'Nombre',cbask as 'Cancha Basketball',cfot as 'Cancha Fotball',cvol as 'Cancha Vollyball',cotra as 'Otra Cancha',frevisita as 'D&iacute;a as Visita',visitantes as 'Visitantes',fundacion as 'Fecha Ignauraci&oacute;n',condicion.condicion as 'Condicion Infraestructura',terreno.tipo as 'Terreno Legal',comunidad.nombre as 'Nombre Comunidad'","tiporecre.idtiporecre=recreacion.idtiporecre and terreno.idterreno=recreacion.idterreno and condicion.idcondicion=recreacion.idcondicion and comunidad.idcomunidad=recreacion.idcomunidad order by recreacion.idrecreacion desc limit 5");

			?>
				</fieldset>
			</div>
		</section>			
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