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
				$b=$_POST["idcomunidad"];
				$c=$_POST["nombre"];
				$d=$_POST["idtipocalle"];
				$e=$_POST["idcondicion"];
				
				$mov=new acciones();
				$ms= $mov->guardar("calle","idcalle,idcomunidad,nombre,idtipocalle,idcondicion","'$a','$b','$c','$d','$e'");
				}
            }
        ?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Calle Avenidas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
			<td><input type=image src="../libreria/images/forms.png" id="nuevo" name="nuevo" value="modificar" title="Modificar" onclick="location.href='modificarca.php';"></td>
			<td><input type=image src='../libreria/images/save.png' id="nuevo" name="nuevo" value="guardar" title="Guardar"></td>
			<td><input type=image src='../libreria/images/printer.png' id="nuevo" name="nuevo" value="imprimir" title="Imprimir" onclick="location.href='../impresion/inicio.php';"></td>
			<td><input type=image src='../libreria/images/info.png' id="nuevo" name="nuevo" value="ayuda" title="Ayuda" onclick="window.open (href='../libreria/ManualUsuario.pdf')"></td></tr>				
                    </table>
		</nav>
		<fieldset>
                <legend>
                Datos de Calles y Avenidas
                </legend>
                 <table id="tabla">
				 
				   <tr><td><label>Codigo:</label></td>
				   <td><input type="text" name="codigo" id="codigo" value="<?php echo newid("calle","idcalle"); ?>" readonly></td></tr>
                   
				   <tr><td><label>Comunidad:</label></td>
				   <td><?php 
					 $b=new consultas();
					 echo $b->selectdetabla("comunidad","nombre","idcomunidad");
					 ?></td></tr>
				 
				   <tr><td><label>Nombre:</label></td>
				   <td><input type="text" name="nombre" id ="nombre" value="" required="required"  title='Nombre Completo' placeholder='Nombre Completo'></td></tr>
                
					<tr><td><label>Tipo Calle:</label></td>
				   <td><?php 
					 $b=new consultas();
					 echo $b->selectdetabla("tipocalle","tipo","idtipocalle");
					 ?></td></tr>
					 
					<tr><td><label>Condici&oacute;n:</label></td>
				   <td><?php 
					 $b=new consultas();
					 echo $b->selectdetabla("condicion","condicion","idcondicion");
					 ?></td></tr>
				
				 </table> 
					</fieldset>			 
				</form>		
				                                
			<?php if ($ms!='') echo " <script>alert('$ms');</script>"; ?>

						<section>
						<div id="formulario2">
						<fieldset>
							
						<form action="calle.php" method="get">
						<table>
						<tr><td><b>Busquedad seg&uacute;n Codigo:</b></td><td><input type="text" name="bu" size="4" title="Digite Codigo"></td>
						<td><input type=image src="../libreria/images/vacancy.png" name="bu1"  id="bu1" value="buscar" title="Buscar"></td></tr>	
						<tr><td>
						
						<?php
						if (isset($_GET['bu']))
						{  //para buscar
							$ii=$_GET['bu'];
							
							$b=new consultas();
							echo "<br>";
							echo $b->buscarvalor("calle","nombre", "idcalle='$ii'");
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
			echo $con->consultar("calle,comunidad,tipocalle,condicion","idcalle as 'ID',comunidad.nombre as 'Nombre Comunidad',calle.nombre as 'Nombre Calle',tipocalle.tipo as 'Tipo',condicion.condicion as 'Condicion Calle Avenida'","comunidad.idcomunidad=calle.idcomunidad and tipocalle.idtipocalle=calle.idtipocalle and condicion.idcondicion=calle.idcondicion order by calle.idcalle desc limit 5");
			?>
							</fieldset>
						</div>
					</section>			
				</div>
			</section>   
			
			<footer id="footer">
			<a href='../libreria/licencia.txt' target="_blank">
			Licencia Pública General GNU publicada 
			por Fundación para el Software Libre
			<br>SIRECOM&#174;</a>
			</footer>
		
		</div>
	</body>
</html>