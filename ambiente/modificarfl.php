<?php
include("../libreria/dbdiagnostico.php");

$uu=usuario();
//buscar el reg a modif
if (isset($_GET['id']))
	{
			
		$id=$_GET['id'];
		$b=new consultas();
		$mod1=$b->buscarvalor("recursoflora","idespecieflora","idrecursoflora='$id'");
		$mod2=$b->buscarvalor("recursoflora","zona","idrecursoflora='$id'");
		$mod3=$b->buscarvalor("recursoflora","area","idrecursoflora='$id'");
		$mod4=$b->buscarvalor("recursoflora","idmedioamb","idrecursoflora='$id'");
		$mod5=$b->buscarvalor("recursoflora","idcomunidad","idrecursoflora='$id'");
				
			
	}
 	if (isset($_GET['idb']))
	{
			
		$id=$_GET['idb'];
		$b=new acciones();
		$mod1=$b->borrar("comunidad","idcomunidad='$id'");
		 echo "<script>alert('Datos borrados');</script>";		
			
	}

?>
<html>
    <head>
        <title>Fauna</title>
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
						
						<form action="modificarfa.php" method="get">
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
		<form class="comunidad" method="POST" action="modificarfl.php" >
		
			<legend>
                Datos de la Flora
                </legend>
                 <table id="tabla">
		
				<tr><td><label>Nombre de la Comunidad</label></td>
					 <td><?php 
					 $b=new consultas();
					 echo $b->selectdetabla("comunidad","nombre","idcomunidad");
						 ?></td></tr>
								 
				 <tr>
					<td>Especie:</td>
					 <td>Zona Geografica:</td>
					 <td>Cantidad:</td>
						
				</tr>
				 
				 <?php 
				    $dbb=new dbdiagnostico();
					$dd=$dbb->consulta("select * from especieflora");
					 
					for ($f=1;$f<=mysql_num_rows($dd);$f++)
					{    $i=mysql_result($dd,$f-1,"idespecieflora");
					     $b="<input type='checkbox' name='especie$f' value='$i' >".mysql_result($dd,$f-1,"nombre");
				 ?>	
					<tr>
					 <td><?php  
							echo $b;
						?>
					</td>   
					<td><input type="text" name="zonageo<?php echo $f; ?>" value="" size="15" title='Zona Geograf&iacute;ca'></td>
					<td><input type="text" name="cant<?php echo $f; ?>" value=""  size="3" title='Cantidad Posee' ></td>
					<td>		      
					  <?php
						}
						echo "<input type='hidden' name='filas' value='$f'>";
					  ?>
				
				</table> 
			<table width="50%" border="0" align="center" cellpadding="10" cellspacing="0">
			<tr>
			<td><div align="center">
			<td><input type=image src='../libreria/images/save.png' id="nuevo" name="nuevo" value="guardar" title="Guardar"></td>
			</div></td>
			</tr>
			</table>				
		</form>
		
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
				$h=$_POST["saguapotable"];
				$i=$_POST["salumbrado"];
				$j=$_POST["saguanegras"];
				$k=$_POST["seelectricidad"];
				$l=@$_POST["strenaseo"];
				
				$mov=new acciones();
				echo $mov->Modificar("vivienda","idtipovivi='$b',direccion='$c',area='$d',idcomunidad='$e',idtipoletrina='$f',idterreno='$g',saguapotable='$h',salumbrado='$i',saguanegras='$j',seelectricidad='$k',strenaseo='$l'","idvivienda='$a'");
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