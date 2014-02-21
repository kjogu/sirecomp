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
				$b=$_POST["idtipovivi"];
				$c=$_POST["direccion"];
				$d=$_POST["area"];
				$e=$_POST["idcomunidad"];
				$f=$_POST["idtipoletrina"];
				$g=$_POST["idterreno"];
				$h=@$_POST["saguapotable"];
				$i=@$_POST["salumbrado"];
				$j=@$_POST["saguanegras"];
				$k=@$_POST["seelectricidad"];
				$l=@$_POST["strenaseo"];
				$m=$_POST["migracion"];
				
				$mov=new acciones();
				$ms= $mov-> guardar("vivienda","idvivienda,idtipovivi,direccion,area,idcomunidad,idtipoletrina,idterreno,saguapotable,salumbrado,saguanegras,seelectricidad,strenaseo,migracion","'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m'");
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
			<td><input type=image src="../libreria/images/forms.png" id="nuevo" name="nuevo" value="modificar" title="Modificar" onclick="location.href='modificarvi.php';"></td>
			<td><input type=image src='../libreria/images/save.png' id="nuevo" name="nuevo" value="guardar" title="Guardar"></td>
			<td><input type=image src='../libreria/images/printer.png' id="nuevo" name="nuevo" value="imprimir" title="Imprimir" onclick="location.href='../impresion/ivivienda.php';"></td>
			<td><input type=image src='../libreria/images/info.png' id="nuevo" name="nuevo" value="ayuda" title="Ayuda" onclick="window.open (href='../libreria/ManualUsuario.pdf')"></td></tr>				
                    </table>
		</nav>
				
			<fieldset>
					<legend>
                Vivienda
					</legend>
             
			 <table id="tabla">
				 
			 <tr><td><label>Codigo:</label></td>
			 <td><input type="text" name="codigo" id="codigo" value="<?php echo newid("vivienda","idvivienda"); ?>" readonly></td></tr>
             
			 <tr><td><label>Tipo</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->selectdetabla("tipovivi","tipo","idtipovivi");
			     ?></td></tr>
			
			<tr><td><label>Direcci&oacute;n</label></td>
			<td><input type="text" name="direccion" value="" required="required" size='25' placeholder='Digine Direcci&oacute;n o Referencia' title='Digine Direcci&oacute;n'></td></tr>
               
			 
			<tr><td><label>&Aacute;rea</label></td>
			<td><input type="text" name="area" value="" required="required" size='25' placeholder='Digite en Metros Cuadrados' title='Digite en Metros Cuadrados'></td></tr>
                     
			
			<tr><td><label>Comunidad</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->selectdetabla("comunidad","nombre","idcomunidad");
			     ?></td></tr>
				 
			<tr><td><label>Tipo de Letrina</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->selectdetabla("tipoletrina","tipo","idtipoletrina");
			     ?></td></tr>
			
			<tr><td><label>Terreno</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->selectdetabla("terreno","tipo","idterreno");
			     ?></td></tr>
			
			<tr><td><label>Agua Potable</label></td>
			 <td><input type="checkbox" name="saguapotable" value='1'></td></tr>
            
			<tr><td><label>Alumbrado</label></td>
			 <td><input type="checkbox" name="salumbrado" id="salumbrado" value='1'></td></tr>

			<tr><td><label>Agua Negras</label></td>
			 <td><input type="checkbox" name="saguanegras" id="saguanegras" value="1" ></td></tr>
            
			<tr><td><label>Energia Electrica</label></td>
			 <td><input type="checkbox" name="seelectricidad" id="seelectricidad"  value="1"></td></tr>
            
			<tr><td><label>Tren Aseo <label></td>
		   	<td><input type="checkbox" name="strenaseo" id="strenaseo" value="1"></td></tr>
            
			 <tr><td><label>Migraci&oacute;n</label></td>
			 <td><input type="text" name="migracion" value="" size='30' required="required" placeholder='Escriba N&uacute;mero si Recibe Ayuda'></td></tr>
              
			</table> 
			
			
					</fieldset>			 
				</form>		
				                                
			<?php if ($ms!='') echo " <script>alert('$ms');</script>"; ?>

						<section>
						<div id="formulario2">
						<fieldset>
						
						<form action="vivienda.php" method="get">
						<table>
						<tr><td><b>Busquedad seg&uacute;n Codigo:</b></td><td><input type="text" name="bu" size="4" title="Digite Codigo"></td>
						<td><input type=image src="../libreria/images/vacancy.png" name="bu1"  id="bu1" value="buscar" title="Buscar"></td></tr>	
						<tr><td>
			<?php

			if (isset($_GET['bu']))
			{  //para buscar
				$ii=$_GET['bu'];
				
				$b=new consultas();
				echo $b->buscarvalor("vivienda","direccion","idvivienda='$ii'");
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

			echo $con->consultar("vivienda,tipovivi,comunidad,tipoletrina,terreno","idvivienda as 'ID',tipovivi.tipo as 'Tipo de Vivienda',direccion as 'Direcci&oacute;n',area as 'Area en Metros Cuadrados',comunidad.nombre as 'Nombre Comunidad',tipoletrina.tipo as 'Tipo de Letrina',terreno.tipo as 'Estado Legal Terreno' ,saguapotable as 'Agua Potable',salumbrado as 'Alumbrado Electrico',saguanegras as 'Aguas Negras',seelectricidad as 'Energia Electrica',strenaseo as 'Tren de Aseo',migracion as 'Familia Migracion'","tipovivi.idtipovivi=vivienda.idtipovivi and comunidad.idcomunidad=vivienda.idcomunidad and tipoletrina.idtipoletrina=vivienda.idtipoletrina and terreno.idterreno=vivienda.idterreno order by vivienda.idvivienda desc limit 5");

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
			<br>SIREOM&#174;</a>			
			</footer>
		</div>
	</body>
</html>