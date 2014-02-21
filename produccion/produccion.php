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
				$b=$_POST["idtipoproduce"];
				$c=$_POST["nombre"];
				$d=$_POST["estacion"];
				$e=$_POST["area"];
				$f=$_POST["cantidad"];
				$g=$_POST["formacrianza"];
				$h=$_POST["formacultivo"];
				$i=$_POST["productores"];
				$j=$_POST["cantproduc"];
				$k=$_POST["costo"];
				$l=$_POST["consumo"];
				$m=$_POST["comercio"];
				$n=$_POST["ingreso"];
				$o=$_POST["idcomunidad"];
				
				
				$mov=new acciones();
				$ms= $mov->guardar("produccion","idproduccion,idtipoproduce,nombre,estacion,area,cantidad,formacrianza,formacultivo,productores,cantproduc,costo,consumo,comercio,ingreso,idcomunidad","'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o'");
				}
            }
        ?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../libreria/styles.css">
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
			<td><input type=image src="../libreria/images/forms.png" id="nuevo" name="nuevo" value="modificar" title="Modificar" onclick="location.href='modificarprod.php';"></td>
			<td><input type=image src='../libreria/images/save.png' id="nuevo" name="nuevo" value="guardar" title="Guardar"></td>
			<td><input type=image src='../libreria/images/printer.png' id="nuevo" name="nuevo" value="imprimir" title="Imprimir" onclick="location.href='../impresion/ivivienda.php';"></td>
			<td><input type=image src='../libreria/images/info.png' id="nuevo" name="nuevo" value="ayuda" title="Ayuda" onclick="window.open (href='../libreria/ManualUsuario.pdf')"></td></tr>				
                    </table>
		</nav>
		<fieldset>
                <legend>
                Datos de Produccion
                </legend>
                 <table id="tabla">
			
			 <tr><td><label>Codigo:</label></td>
			 <td><input type="text" name="codigo" id="codigo" value="<?php echo newid("produccion","idproduccion"); ?>" readonly></td></tr>
             
			 <tr><td><label>Tipo de Produccion:</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->selectdetabla("tipoproduce","tipo","idtipoproduce");
			     ?></td></tr>     
			
			 <tr><td><label>Nombre:</label></td>
			 <td><input type="text" name="nombre" value="" size='30' required autofocus placeholder='Ej. tomate,ma&iacute;z,vaca lecheras' title='Digite Clase Producci&oacute;n'></td></tr>
               
			 <tr><td><label>Estaci&oacute;n:</label></td>
			 <td><input type="text" name="estacion" value="" size='30' required placeholder='Digite Verano o Invierno' title='Digite Estaci&oacute;n Cultivo'></td></tr>
            
			 <tr><td><label>&Aacute;rea:</label></td>
			 <td><input type="text" name="area" value="" size='30' required placeholder='Metros Cuadrados' title='Metros Cuadrados'></td></tr>
             
			 <tr><td><label>Cantidad:</label></td>
			 <td><input type="text" name="cantidad" value="" size='30' required placeholder='Cantida Total Cultivo' title='Cantidad del Cultivo'></td></tr>
			
			 <tr><td><label>Forma de Cultivar o Crianza:</label></td>
			 <td><input type="text" name="formacrianza" value="" size='30' required placeholder='Ej. Organica,quimica,Ninguna' title='Digite Una Forma'></td></tr>
            
			 <tr><td><label>Forma del Cultivo:</label></td>
			 <td><input type="text" name="formacultivo" value="" size='30' required placeholder='Ej. Vertical,' title='Digite uno, si es combinado digite dos o mas'></td></tr>
			
			 <tr><td><label>Productores:</label></td>
			 <td><input type="text" name="productores" value="" size='30' required placeholder='Ej. Familia, Mosos' title='Digite uno o combinado'></td></tr>
            
   			 <tr><td><label>Cantidad de Productores:</label></td>
			 <td><input type="text" name="cantproduc" value=""  size='30' required placeholder='Los que intervienen en el Cultivo' title='N&uacute;mero'></td></tr>
			
             <tr><td><label>Costo:</label></td>
			 <td><input type="text" name="costo" value="" size='30' required placeholder='Total costo Cultivo' title='En dolares'></td></tr>
             
			 <tr><td><label>Consumo:</label></td>
			 <td><input type="text" name="consumo" value="" size='30' required placeholder='Ej. Familiar, Negocio, Comercial' title='Uno o Combinado'></td></tr>
						
			 <tr><td><label>Comercio:</label></td>
			 <td><input type="text" name="comercio" value="" size='30' required placeholder='Ej. Peque&ntilde;o,Grande, Mediano' title='Digite uno'></td></tr>
             
			 <tr><td><label>Ingreso:</label></td>
			 <td><input type="text" name="ingreso" value="" size='30' required placeholder='Escriba la Ganancia Aprox.' title='En dolares'></td></tr>
	 
			<tr><td><label>Comunidad</label></td>
			 <td><?php 
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
										
			<form action="produccion.php" method="get">
						<table>
						<tr><td><b>Busquedad seg&uacute;n Codigo:</b></td><td><input type="text" name="bu" size="4" title="Digite Codigo"></td>
						<td><input type=image src="../libreria/images/vacancy.png" name="bu1"  id="bu1" value="buscar" title="Buscar"></td></tr>	
						<tr><td>

			<?php

			if (isset($_GET['bu']))
			{  //para buscar
				$ii=$_GET['bu'];
				
				$b=new consultas();
				echo $b->buscarvalor("produccion","idtipoproduce","idproduccion='$ii'");	
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

			echo $con->consultar("produccion,tipoproduce,vivienda","idproduccion as 'ID',tipoproduce.tipo as 'Tipo',produccion.nombre as 'Nombre',estacion as 'Estaci&oacute;n',produccion.area as '&Aacute;rea',cantidad as 'Cantidad',formacrianza as 'Forma Crianza',formacultivo as 'Forma Cultivo',productores as 'Productores',cantproduc as 'Cantidad Productores',costo as 'Costo Cultivo',consumo as 'Consumo',comercio as 'Comercio',ingreso as 'Ingreso Economicos',vivienda.direccion as 'Direcci&oacute;n'","produccion.idtipoproduce=tipoproduce.idtipoproduce and vivienda.idvivienda=produccion.idvivienda order by produccion.idproduccion desc limit 5");
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