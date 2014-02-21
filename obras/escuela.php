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
				$b=$_POST['nombreinst'];
				$c=$_POST['grado'];
				$d=$_POST['ninos'];
				$e=$_POST['ninas'];
				$f=$_POST['turnos'];
				$g=$_POST['area'];
				$h=$_POST['docentes'];
				$i=$_POST['fechafu'];
				$j=$_POST['idcondicion'];
				$k=$_POST['idterreno'];
				$l=$_POST['idcomunidad'];
				$m=$_POST['idinstedu'];
				
				
				$mov=new acciones();
				$ms= $mov->guardar("escuela","idescuela,nombre,grados,ninos,ninas,turnos,area,docentes,fundacion,idcondicion,idterreno,idcomunidad,idinstedu","'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m'");
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
			<td><input type=image src="../libreria/images/forms.png" id="nuevo" name="nuevo" value="modificar" title="Modificar" onclick="location.href='modificares.php';"></td>
			<td><input type=image src='../libreria/images/save.png' id="nuevo" name="nuevo" value="guardar" title="Guardar"></td>
			<td><input type=image src='../libreria/images/printer.png' id="nuevo" name="nuevo" value="imprimir" title="Imprimir" onclick="location.href='../impresion/inicio.php';"></td>
			<td><input type=image src='../libreria/images/info.png' id="nuevo" name="nuevo" value="ayuda" title="Ayuda" onclick="window.open (href='../libreria/ManualUsuario.pdf')"></td></tr>				
                    </table>
		</nav>
		<fieldset>
                <legend>
                Instituciones Educativas
                </legend>
                 <table id="tabla">
				 
			<tr><td><label>Codigo:</label></td><td><input type="text" name="codigo" id="codigo" value="<?php echo newid("escuela","idescuela"); ?>"></td></tr>
            
			<tr><td><label>Tipo de Instituci&oacute;n</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->selectdetabla("instedu","institucion","idinstedu");
			     ?></td></tr>
			
			<tr><td><label>Nombre de la Instituci&oacute;n</label></td>
			<td><input type="text" name="nombreinst" value="" required="required" title='Nombre Completo' placeholder='Nombre Completo'></td></tr>
            
			<tr><td><label>Grado "Imparte"</label></td>
			<td><input type="text" name="grado" value="" required="required" title='Ultimo Grado Impartido' placeholder='Ultimo Grado Impartido'></td></tr>
			
			<tr><td><label>Total de ni&ntilde;o</label></td>
			<td><input type="text" name="ninos" value="" required="required" title='Poblaci&oacute;n Total' placeholder='Poblaci&oacute;n Total'></td></tr>
            
			<tr><td><label>Total de ni&ntilde;a</label></td>
			<td><input type="text" name="ninas" value="" required="required" title='Poblaci&oacute;n' placeholder='Poblaci&oacute;n'></td></tr>
			
			<tr><td><label>Turnos:</label></td>
			<td><input type="text" name="turnos" value="" required="required" title='Digitar Turno o Turnos' placeholder='Digitar Turno o Turnos'></td></tr>
            
			<tr><td><label>Total de Docentes:</label></td>
			<td><input type="text" name="docentes" value="" required="required" title='Total Docente' placeholder='Total Docente'></td></tr>
            
			<tr><td><label>Fecha de Fundacion</label></td>
			<td><input type="date" name="fechafu" value="" required="required" title='Fecha Ignauraci&oacute;n' placeholder='Fecha Ignauraci&oacute;n'></td></tr>
			
			<tr><td><label>&Aacute;rea:</label></td>
			<td><input type="text" name="area" value="" required="required" title='Metros Cuadrados' placeholder='Metros Cuadrados'></td></tr>
			
			<tr><td><label>Condici&oacute;n de Infraestructura:</label></td>
			<td>	<?php
			$b=new consultas();
			echo $b->selectdetabla("condicion","condicion","idcondicion");
			?></td></tr>
			
			<tr><td><label>Terreno</label></td>
			<td>	<?php
			$b=new consultas();
			echo $b->selectdetabla("terreno","tipo","idterreno");
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
							
						<form action="escuela.php" method="get">
						<table>
						<tr><td><b>Busquedad seg&uacute;n Codigo:</b></td><td><input type="text" name="bu" size="4" title="Digite Codigo"></td>
						<td><input type=image src="../libreria/images/vacancy.png" name="bu1"  id="bu1" value="buscar" title="Buscar"></td></tr>	
			<tr><td>
			<?php

			if (isset($_GET['bu']))
			{  //para buscar
				$ii=$_GET['bu'];
				
				$b=new consultas();
				echo $b->buscarvalor("escuela","nombre","idescuela='$ii'");
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

			echo $con->consultar("escuela,instedu,condicion,terreno,comunidad","escuela.idescuela as 'ID',escuela.nombre as 'Nombre Instituci&oacute;n',grados as 'Grado Imparten',ninos as 'Poblaci&oacuten Ni&ntilde;os',ninas as 'Poblaci&oacuten Ni&ntilde;as',turnos as 'Turnos',area as '&Aacute;rea',docentes as 'Poblaci&oacute;n Docente',fundacion as 'Fecha Ignauraci&oacute;n',condicion.condicion as 'Condici&oacute;n Infraestructura',terreno.tipo as 'Terreno Legal',instedu.institucion as 'Tipo de Instituci&oacute;n Educativa' ,comunidad.nombre as 'Nombre Comunidad'","instedu.idinstedu=escuela.idinstedu and condicion.idcondicion=escuela.idcondicion and terreno.idterreno=escuela.idterreno and comunidad.idcomunidad=escuela.idcomunidad order by escuela.idescuela desc limit 5");

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