<?php
include("../libreria/dbdiagnostico.php");
$uu=usuario();

//buscar el reg a modif
if (isset($_GET['id']))
	{
			
		$id=$_GET['id'];
		$b=new consultas();
		$mod1=$b->buscarvalor("cargo","cargo","idcargo='$id'");
				
				
			
	}
 	if (isset($_GET['idb']))
	{
			
		$id=$_GET['idb'];
		$b=new acciones();
		$mod1=$b->borrar("cargo","idcargo='$id'");
		 echo "<script>alert('Datos borrados');</script>";		
			
	}

?>
<html>
    <head>
        <title>Cargo Directiva</title>
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
           <li><a href='../comunidad/comunidad.php'><img border="0" src='../libreria/images/home.png' width="25" height="25" title="Inicio"></a></li>
                
				<li><a href='#'>Direcci&oacute;n</a>
				<ul>
				<li><a href='../addireccion/zona.php'>Zona</a></li>
				<li><a href='../addireccion/sector.php'>Sector</a></li>
				<li><a href='../addireccion/limitegeo.php'>Limite Geografico</a></li>
				<li><a href='../addireccion/depa.php'>Departamento</a></li>
				<li><a href='../addireccion/municipio.php'>Municipio</a></li>
				</ul></li>
				
				<li><a href='#'>Persona</a>
				<ul>
				<li><a href='../adpersona/nivelacad.php'>Nivel Academico</a></li>
				<li><a href='../adpersona/ocupacion.php'>Ocupaci&oacute;n</a></li>
				<li><a href='../adpersona/parentezco.php'>Parentezco</a></li>
				</ul></li>
				
				<li><a href='#'>ADESCO</a>
				<ul>
				<li><a href='../adadesco/cargo.php'>Cargo</a></li>
				</ul></li>
				
				<li><a href='#'>Obras Sociales</a>
				<ul>
				<li><a href='../adobra/condicion.php'>Condici&oacute;n</a></li>
				<li><a href='../adobra/instedu.php'>Instituci&oacute;n</a></li>
				<li><a href='../adobra/terreno.php'>Terreno</a></li>
				<li><a href='../adobra/tiporecre.php'>Tipo Recreaci&oacute;n</a></li>
				<li><a href='../adobra/tiposalud.php'>Tipo Salud</a></li>
				
				</ul></li>
				
				<li><a href='#'>Medio Ambiente</a>
				<ul>
				<li><a href='../adambiente/especieflora.php'>Especie Flora</a></li>
				<li><a href='../adambiente/especiefauna.php'>Especie Fauna</a></li>
				<li><a href='../adambiente/tiporeagua.php'>Recurso Agua</a></li>
				
				</ul></li>
				
				<li><a href='#'>Producci&oacute;n</a>
				<ul>
				<li><a href='../adproduccion/tipoproduce.php'>Tipo Produce</a></li>
				</ul></li>
				
				<li><a href='#'>Vivienda</a>
				<ul>
				<li><a href='../advivienda/tipovivi.php'>Tipo Vivienda</a></li>
				<li><a href='../advivienda/tipoletrina.php'> Tipo Letrina</a></li>
				<li><a href='../advivienda/tipocalle.php'>Tipo Calle</a></li>
				</ul></li>
				
				<?php 			
				if ($_SESSION["tusuario"]=="Admin")		
				{
				?>				
				
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
						
						<form action="mcargo.php" method="get">
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
		<form class="comunidad" method="POST" action="mcargo.php" >
			<fieldset>
                <legend>
                Cargo de Directiva
                </legend>
                 <table id="tabla">
				 
				  <tr><td><label>Codigo:</label></td>
				  <td><input type="text" name="codigo" id="codigo" value="<?php echo $id; ?>" readonly></td></tr>
                  
				  <tr><td><label>Cargo de ADESCO:</label></td>
				  <td><input type="text" name="cargo" value="<?php echo $mod1; ?>" required="required" autofocus title='Nuevo Cargo'></td></tr>		 
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
				$b=$_POST["cargo"];
				
				
				$mov=new acciones();
				echo $mov->Modificar("cargo","cargo='$b'","idcargo='$a'");
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