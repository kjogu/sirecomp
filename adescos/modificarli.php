<?php
include("../libreria/dbdiagnostico.php");
$uu=usuario();
//buscar el reg a modif
if (isset($_GET['id']))
	{
			
		$id=$_GET['id'];
		$b=new consultas();
		$modno=$b->buscarvalor("lideres","nombre","idlider='$id'");
		$modfen=$b->buscarvalor("lideres","fechanac","idlider='$id'");
		$modidni=$b->buscarvalor("lideres","idnivelacad","idlider='$id'");
		$modidca=$b->buscarvalor("lideres","idcargo","idlider='$id'");
		$modfei=$b->buscarvalor("lideres","feinicio","idlider='$id'");
		$modfeve=$b->buscarvalor("lideres","fevencrede","idlider='$id'");
		$modidnit=$b->buscarvalor("lideres","idnit","idlider='$id'");
		$modidoc=$b->buscarvalor("lideres","idocupacion","idlider='$id'");		
				
	}
 	if (isset($_GET['idb']))
	{
			
		$id=$_GET['idb'];
		$b=new acciones();
		$mod1=$b->borrar("lideres","idlider='$id'");
		 echo "<script>alert('Datos borrados');</script>";		
			
	}

?>
<html>
    <head>
        <title>Lideres</title>
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
						
						<form action="modificarli.php" method="get">
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
		<form class="comunidad" method="POST" action="modificarli.php" >
			<fieldset>
                <legend>
                Datos de los Lideres
                </legend>
			
		<table id="tabla">
                     
					 <tr><td><label>Codigo:</label></td>
					 <td><input type='text' name='codigo' id="codigo" value='<?php echo $id; ?>' readonly></td></tr>
                     
					 <tr><td><label>Nombre Completo:</label></td>
					 <td><input type='text' name='nombre' value='<?php echo $modno; ?>' required="required" autofocus placeholder="Nombre Completo" title='Nombre Completo'></td></tr>
                     
					 <tr><td><label>Fecha de Nacimiento:</label></td>
					 <td><input type='date' name='fechanac' value='<?php echo $modfen; ?>' required="required"title='Fecha de Nacimiento'></td></tr>
                     
					 <tr><td><label title='Seleccione Nivel Academico'>Nivel &Aacute;cademico:</label></td>
					 <td><?php 
								$b=new consultas();
								echo $b->modselectdetabla("nivelacad","nivel","idnivelacad",$modidni);
								?></td></tr>
					  
					  <tr><td><label title='Seleccione Ocupacion'>Ocupaci&oacute;n:</label></td>
					  <td><?php 
								$b=new consultas();
								echo $b->modselectdetabla("ocupacion","ocupacion","idocupacion",$modidoc);
								?></td></tr>
                     
					 <tr><td><label title='Seleccione el Cargo'>Cargo:</label></td>
										<td>	<?php
										$b=new consultas();
										echo $b->modselectdetabla("cargo","cargo","idcargo",$modidca);
										?></td></tr>
                     
					 <tr><td><label>Fecha Inicio:</label></td>
					 <td><input type='date' name='feini' value='<?php echo $modfei; ?>' required="required" title='Inicio de Cargo'></td></tr>
                     
					 <tr><td><label>Credencial Fech Exp.:</label></td>
					 <td><input type='date' name='fevencre' value='<?php echo $modfeve; ?>' required="required" title='Fecha de Expedicion'></td></tr>
				     
					 <tr><td><label title='ADESCO Correspondiente'>Adesco:</label></td>
					 <td><?php
						 $b=new consultas();
						 echo $b->modselectdetabla("adesco","nombre","idnit",$modidnit);
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
				$a=$_POST["codigo"];
				$b=$_POST["nombre"];
				$c=$_POST["fechanac"];
				$d=$_POST["idnivelacad"];
				$e=$_POST["idcargo"];
				$f=$_POST["feini"];
				$g=$_POST["fevencre"];
				$h=$_POST["idnit"];
				$i=@$_POST["idocupacion"];
				
				$mov=new acciones();
				echo $mov->Modificar("lideres","nombre='$b',fechanac='$c',idnivelacad='$d',idcargo='$e',feinicio='$f',fevencrede='$g',idnit='$h',idocupacion='$i'","idlider='$a'");
			}
			?>

			

			

			
			
    </body>
</html>