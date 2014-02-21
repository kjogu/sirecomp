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

<style>
body
{
background-color:white
	}
body
{
margin:5%;

}

</style>

<div>
      <header>
            <center>
			<P>REPORTE
			<img src="../libreria/images/ADMZ.png" align="left"></P>
			<P>"ASOCIACI&Oacute;N DE DESARROLLO MUNICIPAL <BR>DE ZACATECOLUCA A.D.M.Z."</P><BR>
 	</center>
	
					<p align="right" id="hora">
					<?php
					date_default_timezone_set("America/el_salvador");
					echo date ("d/m/Y, g:i:s");
					?>
					</p>
      </header>
	<section>
   
		<div>
			<?php
			$con=new consultas(); 
			//tabla , camp o y condicion 
			
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			echo "<p>Datos de Comunidad</p>";
			echo $con->consultar("comunidad,depa,municipio,zona,sector,limitegeo","depa.departamento as 'Departamento',municipio.nombre as 'Municipio',zona.nombre as 'Zona',sector.nombre as 'Sector',limitegeo.nombre as 'Direcci&oacute;n',comunidad.nombre as 'Nombre'","depa.iddepa=comunidad.iddepa and comunidad.idmunicipio=municipio.idmunicipio and comunidad.idzona=zona.idzona and comunidad.idsector=sector.idsector and comunidad.idlimitegeo=limitegeo.idlimitegeo and comunidad.idcomunidad='$idc'");
			
			//else
			//echo $con->consultar("comunidad,depa,municipio,zona,sector,limitegeo","depa.departamento as 'Departamento',municipio.nombre as 'Municipio',zona.nombre as 'Zona',sector.nombre as 'Sector',limitegeo.nombre as 'Direcci&oacute;n',comunidad.nombre as 'Nombre'","depa.iddepa=comunidad.iddepa and comunidad.idmunicipio=municipio.idmunicipio and comunidad.idzona=zona.idzona and comunidad.idsector=sector.idsector and comunidad.idlimitegeo=limitegeo.idlimitegeo");
			}
			?>
		     
			
			<?php
			$con=new consultas(); 
			//tabla , campo y condicion 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["comunidades"]>=1)
			{
			echo "<p>Datos de  la Comunidades</p>";
			echo $con->consultar("comunidad,depa,municipio,zona,sector,limitegeo","comunidad.idcomunidad as'ID',depa.departamento as 'Departamento',municipio.nombre as 'Municipio',zona.nombre as 'Zona',sector.nombre as 'Sector',limitegeo.nombre as 'Direcci&oacute;n',comunidad.nombre as 'Nombre'","depa.iddepa=comunidad.iddepa and comunidad.idmunicipio=municipio.idmunicipio and comunidad.idzona=zona.idzona and comunidad.idsector=sector.idsector and comunidad.idlimitegeo=limitegeo.idlimitegeo");
			}
			?>
			
			</div>
			
			</section>  
			<br>
			
			<div id="print">
			<center>
			<a class="oculto" href="javascript:window.print();">
			<image src="../libreria/images/printer.png" name="bu1"  id="bu1" title="Imprimir"/>
			</a>
			</center>
			</div>
			
					
		</div>
	</body>
</html>