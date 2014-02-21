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
				$b=$_POST["tipo"];
				
				
				$mov=new acciones();
				$ms= $mov->guardar("tipovivi","idtipovivi,tipo","'$a','$b'");
               }
            }
        ?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <title> Tipo de Vivienda</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../libreria/styles.css">
		<link rel="shortcut icon" href="../libreria/images/ico.png" type="image/png">
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
	<section>
            <div id='infoprin'>   			
                
              <form id="formulario" method='POST'>
		<nav id="menu2">
                    <table id="otromenu">
			<td><input type=image src="../libreria/images/forms.png" id="nuevo" name="nuevo" value="modificar" title="Modificar" onclick="location.href='mtipovivi.php';"></td>
			<td><input type=image src='../libreria/images/save.png' id="nuevo" name="nuevo" value="guardar" title="Guardar"></td>
			<td><input type=image src='../libreria/images/info.png' id="nuevo" name="nuevo" value="ayuda" title="Ayuda" onclick="window.open (href='../libreria/ManualUsuario.pdf')"></td></tr>				
                    </table>
		</nav>
		<fieldset>
                <legend>
                Tipo de Vivienda
                </legend>
                 <table id="tabla">
				 
				  <tr><td><label>Codigo:</label></td>
				  <td><input type="text" name="codigo" id="codigo" value="<?php echo newid('tipovivi','idtipovivi'); ?>" readonly></td></tr>
                  
				  <tr><td><label>Tipo de Vivienda:</label></td>
				  <td><input type="text" name="tipo" value="" required="required" autofocus title='Nuevo Tipo'></td></tr>		 
					 </table> 
					</fieldset>			 
				</form>		
				                                
					<?php if ($ms!='') echo " <script>alert('$ms');</script>"; ?>

						<section>
						<div id="formulario2">
						<fieldset>
							
						<form action="tipovivi.php" method="get">
						<table>
						<tr><td><b>Busquedad seg&uacute;n Codigo:</b></td><td><input type="text" name="bu" size="4" title="Digite Codigo"></td>
						<td><input type=image src="../libreria/images/vacancy.png" name="bu1"  id="bu1" value="buscar" title="Buscar"></td></tr>	
						<tr><td>

			<?php

			if (isset($_GET['bu']))
			{  //para buscar
				$ii=$_GET['bu'];
				
				$b=new consultas();
				echo $b->buscarvalor("tipovivi","tipo","idtipovivi='$ii'");
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

			echo $con->consultar("tipovivi","idtipovivi as'Codigo',tipo as 'Tipo de Vivienda'","idtipovivi order by idtipovivi desc limit 5");

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