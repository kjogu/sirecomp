<?php
include("../libreria/dbdiagnostico.php");
$uu=usuario();
//buscar el reg a modif
if (isset($_GET['id']))
	{
			
		$id=$_GET['id'];
		$b=new consultas();
		$mod1=$b->buscarvalor("vivienda","idtipovivi","idvivienda='$id'");
		$mod2=$b->buscarvalor("vivienda","direccion","idvivienda='$id'");
		$mod3=$b->buscarvalor("vivienda","area","idvivienda='$id'");
		$mod4=$b->buscarvalor("vivienda","idcomunidad","idvivienda='$id'");
		$mod5=$b->buscarvalor("vivienda","idtipoletrina","idvivienda='$id'");
		$mod6=$b->buscarvalor("vivienda","idterreno","idvivienda='$id'");
		$mod7=$b->buscarvalor("vivienda","saguapotable","idvivienda='$id'");
		$mod8=$b->buscarvalor("vivienda","salumbrado","idvivienda='$id'");
		$mod9=$b->buscarvalor("vivienda","saguanegras","idvivienda='$id'");
		$mod10=$b->buscarvalor("vivienda","seelectricidad","idvivienda='$id'");
		$mod11=$b->buscarvalor("vivienda","strenaseo","idvivienda='$id'");
		$mod12=$b->buscarvalor("vivienda","migracion","idvivienda='$id'");
				
			
	}
 	if (isset($_GET['idb']))
	{
			
		$id=$_GET['idb'];
		$b=new acciones();
		$mod1=$b->borrar("vivienda","idvivienda='$id'");
		 echo "<script>alert('Datos borrados');</script>";		
			
	}

?>

<html>
    <head>
        <title>Vivienda</title>
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
						
						<form action="modificarvi.php" method="get">
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
		<form class="comunidad" method="POST" action="modificarvi.php" >
			<fieldset>
                <legend>
                Datos de la Vivienda
                </legend>
			<table id="tabla">
				 
			 <tr><td><label>Codigo:</label></td>
			 <td><input type="text" name="codigo" id="codigo" value="<?php echo $id; ?>" readonly></td></tr>
             
			 <tr><td><label>Tipo</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->modselectdetabla("tipovivi","tipo","idtipovivi",$mod1);
			     ?></td></tr>
			
			<tr><td><label>Direcci&oacute;n</label></td>
			<td><input type="text" name="direccion" value="<?php echo $mod2; ?>" required="required" size='25' placeholder='Digine Direcci&oacute;n o Referencia' title='Digine Direcci&oacute;n'></td></tr>
               
			 
			<tr><td><label>&Aacute;rea</label></td>
			<td><input type="text" name="area" value="<?php echo $mod3; ?>" required="required" size='25' placeholder='Digite en Metros Cuadrados' title='Digite en Metros Cuadrados'></td></tr>
                     
			
			<tr><td><label>Comunidad</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->modselectdetabla("comunidad","nombre","idcomunidad",$mod4);
			     ?></td></tr>
				 
			<tr><td><label>Tipo de Letrina</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->modselectdetabla("tipoletrina","tipo","idtipoletrina",$mod5);
			     ?></td></tr>
			
			<tr><td><label>Terreno</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->modselectdetabla("terreno","tipo","idterreno",$mod6);
			     ?></td></tr>
			
			<tr><td><label>Agua Potable</label></td>
			 <td><input type="checkbox" name="saguapotable" id="saguapotable" <?php if($mod7>0) echo "checked"; ?>></td></tr>
            
			<tr><td><label>Alumbrado</label></td>
			 <td><input type="checkbox" name="salumbrado" id="salumbrado" <?php if($mod8>0) echo "checked";  ?>></td></tr>
            
			<tr><td><label>Agua Negras</label></td>
			 <td><input type="checkbox" name="saguanegras" id="saguanegras" <?php if($mod9>0) echo "checked";  ?> ></td></tr>
            
			<tr><td><label>Energia Electrica</label></td>
			 <td><input type="checkbox" name="seelectricidad" id="seelectricidad" <?php if($mod10>0) echo "checked";  ?> ></td></tr>
            
			<tr><td><label>Tren Aseo</label></td>
			 <td><input type="checkbox" name="strenaseo" id="strenaseo" <?php if($mod11>0) echo "checked";  ?> ></td></tr>
		
			 <tr><td><label>Migraci&oacute;n</label></td>
			 <td><input type="text" name="migracion" value="<?php echo $mod12; ?>" size='30' required="required" placeholder='Escriba N&uacute;mero si Recibe Ayuda'></td></tr>
              
           
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
				echo $mov->Modificar("vivienda","idtipovivi='$b',direccion='$c',area='$d',idcomunidad='$e',idtipoletrina='$f',idterreno='$g',saguapotable='$h',salumbrado='$i',saguanegras='$j',seelectricidad='$k',strenaseo='$l',migracion='$m'","idvivienda='$a'");
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