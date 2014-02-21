<?php
include("../libreria/dbdiagnostico.php");
$uu=usuario();
//buscar el reg a modif
if (isset($_GET['id']))
	{
			
		$id=$_GET['id'];
		$b=new consultas();
		$mod1=$b->buscarvalor("adesco","nombre","idnit='$id'");
		$modas=$b->buscarvalor("adesco","asamblea","idnit='$id'");
		$modju=$b->buscarvalor("adesco","juntadirectiva","idnit='$id'");
		$modac=$b->buscarvalor("adesco","acuerdomuni","idnit='$id'");
		$modqui=$b->buscarvalor("adesco","quien","idnit='$id'");
		$modfe=$b->buscarvalor("adesco","fechaju","idnit='$id'");
		$modca=$b->buscarvalor("adesco","carta","idnit='$id'");
		$modid=$b->buscarvalor("adesco","idcomunidad","idnit='$id'");
		
		
		
	}
 	if (isset($_GET['idb']))
	{
			
		$id=$_GET['idb'];
		$b=new acciones();
		$mod1=$b->borrar("adesco","idnit='$id'");
		 echo "<script>alert('Datos borrados');</script>";		
			
	}

?>
<html>
    <head>
        <title>Adesco</title>
        <link rel='stylesheet' href='../libreria/styles.css'>
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
						
						<form action="modificarade.php" method="get">
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
		<form class="comunidad" method="POST" action="modificarade.php" >
			<fieldset>
                <legend>
                Datos de la Adesco
                </legend>
			
			<table id="tabla">
				 
		    <tr><td><label>NIT:</label></td>
				<td><input type="text" name="codigo" id="codigo" value='<?php echo $id; ?>' readonly></td></tr>
           
		    <tr><td><label>Nombre:</label></td>
				<td><input type="text" name="nombre" id="nombre" value='<?php echo $mod1; ?>' required="required" autofocus placeholder="Nombre Completo" title="Nombre Completo"></td></tr>
			
			<tr><td><label>Libros Legales: </label></td><td>Asamblea General:</td>
				<td><input type="date" name="asamblea" value='<?php echo $modas; ?>' title="Fecha de la 1er. Asamblea" required="required"></td>
				<td>Junta Directiva: </td><td><input type="date" name="junta" value='<?php echo $modju; ?>' title="Fecha de Formaci&oacute;n" required="required"></td></tr>
			
			<tr><td><label>Juramentaci&oacute;n: </label></td><td>Por Qui&eacute;n:</td>
				<td><input type="text" name="quien" required="required"  value='<?php echo $modqui; ?>'placeholder="Nombre completo, Cargo" title="Nombre Completo"></td>
				<td>Fecha:</td><td><input type="date" name="fechaju" value='<?php echo $modfe; ?>'  title="Fecha de Juramentaci&oacute;n" required="required"></td></tr>
            
			<tr><td><label> Posee:</label></td><td>Acuerdo Municipal:</td>
				<td><input type="date" name="acuerdo" value='<?php echo $modac; ?>' title="Fecha en que se Realizo" required="required"></td>
				<td>Carta Constituci&oacute;n:</td><td>
				<input type="date" name="carta" value='<?php echo $modca; ?>'title="Fecha de Recibida" required="required"></td></tr>
            
			<tr><td><label title="Elegir Comunidad">Comunidad:</label></td>
			<td>
			
			<?php
			$b=new consultas();
			echo $b->modselectdetabla("comunidad","nombre","idcomunidad",$modid);
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
			if (isset($_POST['codigo']))
			{
			
					$a=$_POST['codigo'];
					$b=$_POST['nombre'];
					$c=$_POST['asamblea'];
					$d=$_POST['junta'];
					$e=$_POST['acuerdo'];
					$f=$_POST['quien'];
					$g=$_POST['fecha'];
					$h=$_POST['carta'];
					$i=@$_POST['idcomunidad'];
					
					$mov=new acciones();
					echo $mov->Modificar("adesco","nombre='$b',asamblea='$c',juntadirectiva='$d',acuerdomuni='$e',quien='$f',fechaju='$g',carta='$h',idcomunidad='$i'","idnit='$a'");
			} ?>

    </body>
</html>