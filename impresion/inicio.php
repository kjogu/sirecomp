<?php
include("../libreria/dbdiagnostico.php");
$uu=usuario();
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
                
              <form id="formulario" method='POST' action="reporte.php" target='_blank'>
			
			<center><h4>Seleccione Informe</h4></center>
	
		<div id="tabla2">
					<div>	
					<table>

						<tr> 
						<th colspan="4" id="nombre2">Comunidad </th> 
						</tr>
						
						<tr>
								<td><label title="Elegir Comunidad">Comunidad</label></td>
								<td>
								<?php
								$b=new consultas();
								echo $b->selectdetablass("comunidad","nombre","idcomunidad");
								?></td>
						
								
							</tr>
							
							</table>
					<div>				
						<table>
							<td></td>
						<tr>
								<td><label>Comunidades</label></td>
								<td  id="ntabla"><input type="checkbox" name="comunidades" id="comunidades" value="1" ></td>
								
								
								<td><label>Calles y Avenidas</label></td>
								<td id="ntabla"><input type="checkbox" name="calle" id="calle" value="1" ></td>
								
						 </tr>
						 

						 
					<tr>
					<th colspan="4" id="nombre2">Datos de las Familias</th>
					</tr>
								
						<tr>
								<td><label>Viviendas</label></td>
								<td id="ntabla"><input type="checkbox" name="viviendas" id="viviendas" value="1" ></td>
								
						</tr>
						
						<tr>
						<th colspan="4" id="nombre2">Riesgo y Amenazas</th>
								</tr>
								
								<tr>
										<td><label>Riesgo Amenazas</label></td>
										<td id="ntabla"><input type="checkbox" name="riesgo" id="riesgo" value="1"></td>
										
								</tr>
					<tr>
					<th colspan="4" id="nombre2">Adesco</th>
					</tr>
						
						<tr>
								<td><label>ADESCO</label></td>
								<td  id="ntabla"><input type="checkbox" name="adesco" id="adesco"  value="1"></td>
								
								
						</tr>
						
						
						
								
			
							</table>
						</div>
					</div>
				</div>
	<div id="tabla3">
	<table id="tabla3">
				
	
		<tr>
		<th colspan="4" id="nombre2">Instituci&oacute;nes Cooperante</th>
		</tr>
			
			<tr>
					<td><label>Cooperantes</label></td>
					<td id="ntabla"><input type="checkbox" name="cooperantes" id="cooperantes" value="1"></td>
					
			
			</tr>
		
			
		<tr>
		<th colspan="4" id="nombre2">Obras Sociales</th>
		</tr>
			
			
					<td><label>Comunal</label></td>
					<td id="ntabla"><input type="checkbox" name="comunal" id="comunal"  value="1"></td>
				 
				
		 
					<td><label>Instituci&oacute;n Educativa</label></td>
					<td id="ntabla"><input type="checkbox" name="educativa" id="educativa" value="1"></td>
				
				
		<tr>
					<td><label>Salud</label></td>
					<td id="ntabla"><input type="checkbox" name="salud" id="salud" value="1"></td>
				
				
		
					<td><label>Recreacci&oacute;n</label></td>
					<td id="ntabla"><input type="checkbox" name="recreacion" id="recreacion" value="1"></td>
		</tr>
			

		<tr>
		<th colspan="4" id="nombre2">Medio Ambiente</th>
		</tr>
			
			
					<td><label>Recurso Flora</label></td>
					<td id="ntabla"><input type="checkbox" name="flora" id="flora" value="1"></td>
					
				
		
					<td><label>Recurso Fauna</label></td>
					<td id="ntabla"><input type="checkbox" name="fauna" id="fauna" value="1"></td>
					 
					
			<tr>
					<td><label>Recurso Agua</label></td>
					<td id="ntabla"><input type="checkbox" name="agua" id="agua" value="1"></td>
					
				
		
					<td><label>Clima</label></td>
					<td id="ntabla"><input type="checkbox" name="clima" id="clima" value="1"></td>
			</tr>
					
	</table> 	
	</div>
			<section> <center>
						<input type=image src="../libreria/images/binoculars.png" name="bu1"  id="bu1" value="buscar" title="Buscar";>	
				</center></section>			
				
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