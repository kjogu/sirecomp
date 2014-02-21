<?php
include("../libreria/dbdiagnostico.php");
$uu=usuario();
//buscar el reg a modif
if (isset($_GET['id']))
	{
			
		$id=$_GET['id'];
		$b=new consultas();
		$modidti=$b->buscarvalor("produccion","idtipoproduce","idproduccion='$id'");
		$modno=$b->buscarvalor("produccion","nombre","idproduccion='$id'");
		$modes=$b->buscarvalor("produccion","estacion","idproduccion='$id'");
		$modar=$b->buscarvalor("produccion","area","idproduccion='$id'");
		$modca=$b->buscarvalor("produccion","cantidad","idproduccion='$id'");
		$modfo=$b->buscarvalor("produccion","formacrianza","idproduccion='$id'");
		$modfoc=$b->buscarvalor("produccion","formacultivo","idproduccion='$id'");
		$modpr=$b->buscarvalor("produccion","productores","idproduccion='$id'");
		$modcp=$b->buscarvalor("produccion","cantproduc","idproduccion='$id'");
		$modco=$b->buscarvalor("produccion","costo","idproduccion='$id'");
		$modcn=$b->buscarvalor("produccion","consumo","idproduccion='$id'");
		$modcm=$b->buscarvalor("produccion","comercio","idproduccion='$id'");
		$modin=$b->buscarvalor("produccion","ingreso","idproduccion='$id'");
		$modico=$b->buscarvalor("produccion","idvivienda","idvivienda='$id'");
				
				
			
	}
 	if (isset($_GET['idb']))
	{
			
		$id=$_GET['idb'];
		$b=new acciones();
		$mod1=$b->borrar("produccion","idproduccion='$id'");
		 echo "<script>alert('Datos borrados');</script>";		
			
	}

?>
<html>
    <head>
        <title>Producci&oacute;n</title>
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
						
						<form action="modificarprod.php" method="get">
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
		<form class="comunidad" method="POST" action="modificarprod.php" >
			<fieldset>
                
			 <legend>
                Datos de Producci&oacute;n
                </legend>
                 <table id="tabla">
			
			 <tr><td><label>Codigo:</label></td>
			 <td><input type="text" name="codigo" id="codigo" value="<?php echo $id; ?>" readonly></td></tr>
             
			 <tr><td><label>Tipo de Producci&oacute;n:</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->modselectdetabla("tipoproduce","tipo","idtipoproduce",$modidti);
			     ?></td></tr>     
			
			 <tr><td><label>Nombre:</label></td>
			 <td><input type="text" name="nombre" value="<?php echo $modno; ?>" size='30' required autofocus placeholder='Ej. tomate,ma&iacute;z,vaca lecheras' title='Digite Clase Producci&oacute;n'></td></tr>
               
			 <tr><td><label>Estaci&oacute;n:</label></td>
			 <td><input type="text" name="estacion" value="<?php echo $modes; ?>" size='30' required placeholder='Digite Verano o Invierno' title='Digite Estaci&oacute;n Cultivo'></td></tr>
            
			 <tr><td><label>&Aacute;rea:</label></td>
			 <td><input type="text" name="area" value="<?php echo $modar; ?>" size='30' required placeholder='Metros Cuadrados' title='Metros Cuadrados'></td></tr>
             
			 <tr><td><label>Cantidad:</label></td>
			 <td><input type="text" name="cantidad" value="<?php echo $modca; ?>" size='30' required placeholder='Cantida Total Cultivo' title='Cantidad del Cultivo'></td></tr>
			
			 <tr><td><label>Forma de Cultivar o Crianza:</label></td>
			 <td><input type="text" name="formacrianza" value="<?php echo $modfo; ?>" size='30' required placeholder='Ej. Organica,quimica,Ninguna' title='Digite Una Forma'></td></tr>
            
			 <tr><td><label>Forma del Cultivo:</label></td>
			 <td><input type="text" name="formacultivo" value="<?php echo $modfoc; ?>" size='30' required placeholder='Ej. Vertical,' title='Digite uno, si es combinado digite dos o mas'></td></tr>
			
			 <tr><td><label>Productores:</label></td>
			 <td><input type="text" name="productores" value="<?php echo $modpr; ?>" size='30' required placeholder='Ej. Familia, Mosos' title='Digite uno o combinado'></td></tr>
            
   			 <tr><td><label>Cantidad de Productores:</label></td>
			 <td><input type="text" name="cantproduc" value="<?php echo $modcp; ?>"  size='30' required placeholder='Los que intervienen en el Cultivo' title='N&uacute;meros'></td></tr>
			
             <tr><td><label>Costo:</label></td>
			 <td><input type="text" name="costo" value="<?php echo $modco; ?>" size='30' required placeholder='Total costo Cultivo' title='En dolares'></td></tr>
             
			 <tr><td><label>Consumo:</label></td>
			 <td><input type="text" name="consumo" value="<?php echo $modcn; ?>" size='30' required placeholder='Ej. Familiar, Negocio, Comercial' title='Uno o Combinado'></td></tr>
						
			 <tr><td><label>Comercio:</label></td>
			 <td><input type="text" name="comercio" value="<?php echo $modcm; ?>" size='30' required placeholder='Ej. Peque&ntilde;o,Grande, Mediano' title='Digite uno'></td></tr>
             
			 <tr><td><label>Ingreso:</label></td>
			 <td><input type="text" name="ingreso" value="<?php echo $modin; ?>" size='30' required placeholder='Escriba la Ganancia Aprox.' title='En dolares'></td></tr>
	 
			<tr><td><label>Direcci&oacute;n Vivienda</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->modselectdetabla("vivienda","direccion","idvivienda",$modico);
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
				$o=@$_POST["idvivienda"];
				
				
				$mov=new acciones();
				echo $mov->Modificar("produccion","idtipoproduce='$b',nombre='$c',estacion='$d',area='$e',cantidad='$f',formacrianza='$g',formacultivo='$h',productores='$i',cantproduc='$j',costo='$k',consumo='$l',comercio='$m',ingreso='$n',idvivienda='$o'","idproduccion='$a'");
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