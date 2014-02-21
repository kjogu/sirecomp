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
				$a=$_POST["codigo"];
				$b=$_POST["nombre"];
				$c=$_POST["fechanac"];
				$d=$_POST["idnivelacad"];
				$e=$_POST["idcargo"];
				$f=$_POST["feini"];
				$g=$_POST["fevencre"];
				$h=$_POST["idnit"];
				$i=$_POST["idocupacion"];
				
				$mov=new acciones();
				$ms= $mov->guardar("lideres","idlider,nombre,fechanac,idnivelacad,idcargo,feinicio,fevencrede,idnit,idocupacion","'$a','$b','$c','$d','$e','$f','$g','$h','$i'");
				}
				}
	?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Lideres</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="../libreria/images/ico.png" type="image/png">
		<link rel="stylesheet" href="../libreria/styles.css">
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
			<section>
            <div id='infoprin'>   			     
                <form id="formulario" method='POST'>
					<nav id="menu2">
						<table id="otromenu">
							<td><input type=image src="../libreria/images/forms.png" id="nuevo" name="nuevo" value="modificar" title="Modificar" onclick="location.href='modificarli.php';"></td>
							<td><input type=image src='../libreria/images/save.png' id="nuevo" name="nuevo" value="guardar" title="Guardar"></td>
							<td><input type=image src='../libreria/images/printer.png' id="nuevo" name="nuevo" value="imprimir" title="Imprimir" onclick="location.href='../impresion/iadesco.php';"></td>
							<td><input type=image src='../libreria/images/info.png' id="nuevo" name="nuevo" value="ayuda" title="Ayuda" onclick="window.open (href='../libreria/ManualUsuario.pdf')"></td></tr>				
						</table>
					</nav>
				<fieldset>
					<legend>
						Datos de los Lideres
					</legend>
                 <table id="tabla">
                     
					 <tr><td><label>Codigo:</label></td> 
					 <td><input type='text' name='codigo' id="codigo" value='<?php echo newid("lideres","idlider"); ?>' readonly></td></tr>
                     
					 <tr><td><label>Nombre Completo:</label></td>
					 <td><input type='text' name='nombre' value='' required="required" autofocus placeholder="Nombre Completo" title='Nombre Completo'></td></tr>
                     
					 <tr><td><label>Fecha de Nacimiento:</label></td>
					 <td><input type='date' name='fechanac' value='' required="required"title='Fecha de Nacimiento'></td></tr>
                     
					 <tr><td><label title='Seleccione Nivel Academico'>Nivel &Aacute;cademico:</label></td>
					 <td><?php 
								$b=new consultas();
								echo $b->selectdetabla("nivelacad","nivel","idnivelacad");
								?></td></tr>
					  
					  <tr><td><label title='Seleccione Ocupacion'>Ocupaci&oacute;n:</label></td>
					  <td><?php 
								$b=new consultas();
								echo $b->selectdetabla("ocupacion","ocupacion","idocupacion");
								?></td></tr>
                     
					 <tr><td><label title='Seleccione el Cargo'>Cargo:</label></td>
										<td>	<?php
										$b=new consultas();
										echo $b->selectdetabla("cargo","cargo","idcargo");
										?></td></tr>
                     
					 <tr><td><label>Fecha Inicio:</label></td>
					 <td><input type='date' name='feini' value='' required="required" title='Inicio de Cargo'></td></tr>
                     
					 <tr><td><label>Credencial Fech Exp.:</label></td>
					 <td><input type='date' name='fevencre' value='' required="required" title='Fecha de Expedicion'></td></tr>
				     
					 <tr><td><label title='ADESCO Correspondiente'>Adesco:</label></td>
					 <td><?php
						 $b=new consultas();
						 echo $b->selectdetabla("adesco","nombre","idnit");
						?></td></tr>
				 
						</table> 
					</fieldset>			 
				</form>

				<?php if ($ms!='') echo " <script>alert('$ms');</script>"; ?>
				
						
						<section>
						<div id="formulario2">
						<fieldset>
						
						
						<form action="lideres.php" method="get">
						<table>
						<tr><td><b>Busquedad Seg&uacute;n Codigo:</b><input type="text" name="bu" size="4" title='Digite Codigo'></td>
						<td><input type=image src="../libreria/images/vacancy.png" name="bu1"  id="bu1" value="buscar"></td></tr>
						
						<tr><td>
						<?php
						if (isset($_GET['bu']))
						{  //para buscar
							$ii=$_GET['bu'];
							
							$b=new consultas();
							echo "<br>";
							echo $b->buscarvalor("lideres","nombre","idlider='$ii'");
						}
						//Guardar
						?>
						</td></tr>
						
						</table>
						</form>
						</fieldset>
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
			echo $con->consultar("lideres,cargo,ocupacion,nivelacad,adesco","idlider as 'ID',lideres.nombre as 'Nombre del Lider',fechanac as 'Fecha Nacimiento',nivelacad.nivel as 'Nivel Academico',cargo.cargo as 'Cargo en Directiva',feinicio as 'Inicio en Directiva',fevencrede as 'Fecha Expedici&oacute;n en Directiva',adesco.nombre as 'Nombre ADESCO',ocupacion.ocupacion as 'Ocupaci&oacute;n' ","cargo.idcargo=lideres.idcargo and ocupacion.idocupacion=lideres.idocupacion and nivelacad.idnivelacad=lideres.idnivelacad and adesco.idnit=lideres.idnit order by lideres.idlider desc limit 5");
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