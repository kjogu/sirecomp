<?php
include("../libreria/dbdiagnostico.php");
$uu=usuario();
//buscar el reg a modif
if (isset($_GET['id']))
	{
			
		$id=$_GET['id'];
		$b=new consultas();
		$modidcom=$b->buscarvalor("calle","idcomunidad","idcalle='$id'");
		$modno=$b->buscarvalor("calle","nombre","idcalle='$id'");
		$modidti=$b->buscarvalor("calle","idtipocalle","idcalle='$id'");
		$modidcon=$b->buscarvalor("calle","idcondicion","idcalle='$id'");
				
				
			
	}
 	if (isset($_GET['idb']))
	{
			
		$id=$_GET['idb'];
		$b=new acciones();
		$mod1=$b->borrar("calle","idcalle='$id'");
		 echo "<script>alert('Datos borrados');</script>";		
			
	}

?>
<html>
    <head>
        <title>Calles Avenidas</title>
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
						
						<form action="modificarca.php" method="get">
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
		<form class="comunidad" method="POST" action="modificarca.php" >
			<fieldset>
                <legend>
                Datos de Calles Avenidas
                </legend>
 		
		<table id="tabla">
				 
				   <tr><td><label>Codigo:</label></td>
				   <td><input type="text" name="codigo" id="codigo" value="<?php echo $id; ?>" readonly></td></tr>
                   
				   <tr><td><label>Comunidad:</label></td>
				   <td><?php 
					 $b=new consultas();
					 echo $b->modselectdetabla("comunidad","nombre","idcomunidad",$modidcom);
					 ?></td></tr>
				 
				   <tr><td><label>Nombre:</label></td>
				   <td><input type="text" name="nombre" id ="nombre" value='<?php echo $modno; ?>' required="required"  title='Nombre Completo' placeholder='Nombre Completo'></td></tr>
                
					<tr><td><label>Tipo Calle:</label></td>
				   <td><?php 
					 $b=new consultas();
					 echo $b->modselectdetabla("tipocalle","tipo","idtipocalle",$modidti);
					 ?></td></tr>
					 
					<tr><td><label>Condici&oacute;n:</label></td>
				   <td><?php 
					 $b=new consultas();
					 echo $b->modselectdetabla("condicion","condicion","idcondicion",$modidcon);
					 ?></td></tr>
				
				 </table> 
				 
					<table width="50%" border="0" align="center" cellpadding="10" cellspacing="0">
					<tr>
					<td><div align="center">
					<td><input type=image src='../libreria/images/save.png' id="nuevo" name="nuevo" value="guardar" title="Guardar"></td>
					</div></td>
					</tr>
				</table>		
				</form>
		
		<?php
		
		}
			if (isset($_POST['codigo']))
			{
				$a=$_POST['codigo'];
				$b=$_POST["idcomunidad"];
				$c=$_POST["nombre"];
				$d=$_POST["idtipocalle"];
				$e=@$_POST["idcondicion"];
				
				$mov=new acciones();
				echo $mov->Modificar("calle","idcomunidad='$b',nombre='$c',idtipocalle='$d',idcondicion='$e'","idcalle='$a'");
				
			}
			?>
	
			<footer id="footer" align="center">		
			<br>
			<a href='../libreria/licencia.txt' target="_blank">
			Licencia P&uacute;blica General GNU publicada 
			por Fundaci&oacute;n para el Software Libre
			<br>SIRECOM&#174;</a>			
			</footer>
			
    </body>
</html>