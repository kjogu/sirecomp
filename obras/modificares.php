<?php
include("../libreria/dbdiagnostico.php");

$uu=usuario();
//buscar el reg a modif
if (isset($_GET['id']))
	{
			
		$id=$_GET['id'];
		$b=new consultas();
		$mod1=$b->buscarvalor("escuela","nombre","idescuela='$id'");
		$modgra=$b->buscarvalor("escuela","grados","idescuela='$id'");
		$modnio=$b->buscarvalor("escuela","ninos","idescuela='$id'");
		$modnia=$b->buscarvalor("escuela","ninas","idescuela='$id'");
		$modtur=$b->buscarvalor("escuela","turnos","idescuela='$id'");
		$modar=$b->buscarvalor("escuela","area","idescuela='$id'");
		$moddo=$b->buscarvalor("escuela","docentes","idescuela='$id'");
		$modfun=$b->buscarvalor("escuela","fundacion","idescuela='$id'");
		$modidco=$b->buscarvalor("escuela","idcondicion","idescuela='$id'");
		$modidte=$b->buscarvalor("escuela","idterreno","idescuela='$id'");
		$modidob=$b->buscarvalor("escuela","idcomunidad","idescuela='$id'");
		$modidin=$b->buscarvalor("escuela","idinstedu","idescuela='$id'");
		
				
				
			
	}
 	if (isset($_GET['idb']))
	{
			
		$id=$_GET['idb'];
		$b=new acciones();
		$mod1=$b->borrar("escuela","idescuela='$id'");
		 echo "<script>alert('Datos borrados');</script>";		
			
	}

?>
<html>
    <head>
        <title>Inst. Educativa</title>
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
						
						<form action="modificares.php" method="get">
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
		<form class="comunidad" method="POST" action="modificares.php" >
			<fieldset>
                <legend>
                Datos de Instituciones Educativas
                </legend>
			
			<table id="tabla">
				 
			<tr><td><label>Codigo:</label></td><td><input type="text" name="codigo" id="codigo" value="<?php echo $id; ?>"></td></tr>
            
			<tr><td><label>Tipo de Instituci&oacute;n</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->selectdetabla("instedu","institucion","idinstedu");
			     ?></td></tr>
			
			<tr><td><label>Nombre de la Instituci&oacute;n</label></td>
			<td><input type="text" name="nombreinst" value="<?php echo $mod1; ?>" required="required" title='Nombre Completo' placeholder='Nombre Completo'></td></tr>
            
			<tr><td><label>Grado "Imparte"</label></td>
			<td><input type="text" name="grado" value="<?php echo $modgra; ?>" required="required" title='Ultimo Grado Impartido' placeholder='Ultimo Grado Impartido'></td></tr>
			
			<tr><td><label>Total de ni&ntilde;o</label></td>
			<td><input type="text" name="ninos" value="<?php echo $modnio; ?>" required="required" title='Poblaci&oacute;n Total' placeholder='Poblaci&oacute;n Total'></td></tr>
            
			<tr><td><label>Total de ni&ntilde;a</label></td>
			<td><input type="text" name="ninas" value="<?php echo $modnia; ?>" required="required" title='Poblaci&oacute;n' placeholder='Poblaci&oacute;n'></td></tr>
			
			<tr><td><label>Turnos:</label></td>
			<td><input type="text" name="turnos" value="<?php echo $modtur; ?>" required="required" title='Digitar Turno o Turnos' placeholder='Digitar Turno o Turnos'></td></tr>
            
			<tr><td><label>Total de Docentes:</label></td>
			<td><input type="text" name="docentes" value="<?php echo $moddo; ?>" required="required" title='Total Docente' placeholder='Total Docente'></td></tr>
            
			<tr><td><label>Fecha de Fundacion</label></td>
			<td><input type="date" name="fechafu" value="<?php echo $modfun; ?>" required="required" title='Fecha Ignauraci&oacute;n' placeholder='Fecha Ignauraci&oacute;n'></td></tr>
			
			<tr><td><label>&Aacute;rea:</label></td>
			<td><input type="text" name="area" value=""<?php echo $modar; ?>"" required="required" title='Metros Cuadrados' placeholder='Metros Cuadrados'></td></tr>
			
			<tr><td><label>Condici&oacute;n de Infraestructura:</label></td>
			<td>	<?php
			$b=new consultas();
			echo $b->modselectdetabla("condicion","condicion","idcondicion",$modidco);
			?></td></tr>
			
			<tr><td><label>Terreno</label></td>
			<td>	<?php
			$b=new consultas();
			echo $b->modselectdetabla("terreno","tipo","idterreno",$modidte);
			?></td></tr>
			
			<tr><td><label title="Elegir Comunidad">Comunidad:</label></td>
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
		
		<?php }
			if (isset($_POST["codigo"]))
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
				$m=@$_POST['idinstedu'];
				
				
				$mov=new acciones();
				echo $mov->Modificar("escuela","nombre='$b',grados='$c',ninos='$d',ninas='$e',turnos='$f',area='$g',docentes='$h',fundacion='$i',idcondicion='$j',idterreno='$k',idcomunidad='$l',idinstedu='$m'","idescuela='$a'");
				}	?>
							
		<footer id="footer" align="center">		
			<br>
			<a href='../libreria/licencia.txt' target="_blank">
			Licencia P&uacute;blica General GNU publicada 
			por Fundaci&oacute;n para el Software Libre
			<br>SIRECOM&#174;</a>			
			</footer>	
    </body>
</html>