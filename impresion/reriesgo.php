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
			
			$idc=$_POST["idriesgo"];
			if (@$_POST["idriesgo"] >=1)
			{
			echo "<p>Datos de Amenazas y Riesgo</p>";
			echo $con->consultar("riesgo,comunidad,obras","riesgo.idriesgo as 'ID',nombreri as 'Nombre Riesgo Amenaza',fechain as 'Fecha Inicio',fechafi as 'Fecha Solucionado',comunidad.nombre as 'Comunidad',obras.nombre as 'Tipo Obra'","comunidad.idcomunidad=riesgo.idcomunidad and obras.idobras=riesgo.idobras and riesgo.idriesgo='$idc'");
			
			//else
			//echo $con->consultar("comunidad,depa,municipio,zona,sector,limitegeo","depa.departamento as 'Departamento',municipio.nombre as 'Municipio',zona.nombre as 'Zona',sector.nombre as 'Sector',limitegeo.nombre as 'Direcci&oacute;n',comunidad.nombre as 'Nombre'","depa.iddepa=comunidad.iddepa and comunidad.idmunicipio=municipio.idmunicipio and comunidad.idzona=zona.idzona and comunidad.idsector=sector.idsector and comunidad.idlimitegeo=limitegeo.idlimitegeo");
			}
			?>
		     
			
			<?php
			$con=new consultas(); 
			//tabla , campo y condicion 
			$idc=$_POST["idriesgo"];
			if (@$_POST["riesgo"]>=1)
			{
			echo "<p>Datos de  las ADESCO</p>";
			echo $con->consultar("riesgo,comunidad,obras","riesgo.idriesgo as 'ID',nombreri as 'Nombre Riesgo Amenaza',fechain as 'Fecha Inicio',fechafi as 'Fecha Solucionado',comunidad.nombre as 'Comunidad',obras.nombre as 'Tipo Obra'","comunidad.idcomunidad=riesgo.idcomunidad and obras.idobras=riesgo.idobras");
			}
			?>
			
			
					
			<?php
			$con=new consultas(); 
			//tabla , campo y condicion 
			$idc=$_POST["idriesgo"];
			if (@$_POST["idriesgo"] >=1)
			{
			if (@$_POST["plan"]==1)
			{
			echo "<p>Datos del Plan de Emergencia</p>";
			echo $con->consultar("planemer,riesgo","planemer.idplanemer as 'ID',nombre as 'Nombre',planemer.fechain as 'Fecha Inicio',planemer.fechafi as 'Fecha Final',encargados as 'Encargados del Plan',riesgo.nombreri as 'Nombre Riesgo'","riesgo.idriesgo=planemer.idriesgo and planemer.idriesgo='$idc'");
			}
			}
			if (@$_POST["idriesgo"]==0)
			{
			if (@$_POST["plan"]==1)
			{
			echo "<p>Datos del Plan de Emergencia</p>";
			echo $con->consultar("planemer,riesgo","planemer.idplanemer as 'ID',nombre as 'Nombre',planemer.fechain as 'Fecha Inicio',planemer.fechafi as 'Fecha Final',encargados as 'Encargados del Plan',riesgo.nombreri as 'Nombre Riesgo'","riesgo.idriesgo=planemer.idriesgo");
			}
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