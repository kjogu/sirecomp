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
			
			$idc=$_POST["idnit"];
			if (@$_POST["idnit"] >=1)
			{
			echo "<p>Datos de ADESCO</p>";
			echo $con->consultar("adesco,comunidad","idnit as 'ID',asamblea as 'Fecha 1er Asamblea General',juntadirectiva as 'Fecha formaci&oacute;n de Directiva',acuerdomuni as 'Fecha Acuerdo Municipal',quien as 'Persona Realizo Juramentaci&oacute;n',fechaju as 'Fecha de Juramentaci&oacute;n',carta as 'Fecha Recibida Carta de Constituci&oacute;n',comunidad.nombre as 'Comunidad que Pertenece'","comunidad.idcomunidad=adesco.idcomunidad and adesco.idnit='$idc'");
			
			//else
			//echo $con->consultar("comunidad,depa,municipio,zona,sector,limitegeo","depa.departamento as 'Departamento',municipio.nombre as 'Municipio',zona.nombre as 'Zona',sector.nombre as 'Sector',limitegeo.nombre as 'Direcci&oacute;n',comunidad.nombre as 'Nombre'","depa.iddepa=comunidad.iddepa and comunidad.idmunicipio=municipio.idmunicipio and comunidad.idzona=zona.idzona and comunidad.idsector=sector.idsector and comunidad.idlimitegeo=limitegeo.idlimitegeo");
			}
			?>
		     
			
			<?php
			$con=new consultas(); 
			//tabla , campo y condicion 
			$idc=$_POST["idnit"];
			if (@$_POST["adesco"]>=1)
			{
			echo "<p>Datos de  las ADESCO</p>";
			echo $con->consultar("adesco,comunidad","idnit as 'ID',asamblea as 'Fecha 1er Asamblea General',juntadirectiva as 'Fecha formaci&oacute;n de Directiva',acuerdomuni as 'Fecha Acuerdo Municipal',quien as 'Persona Realizo Juramentaci&oacute;n',fechaju as 'Fecha de Juramentaci&oacute;n',carta as 'Fecha Recibida Carta de Constituci&oacute;n',comunidad.nombre as 'Comunidad que Pertenece'","comunidad.idcomunidad=adesco.idcomunidad");
			}
			?>
			
			
			
			
			<?php
			$con=new consultas(); 
			$idc=$_POST["idnit"];
			if (@$_POST["idnit"] >=1)
			{
			if (@$_POST["lideres"]==1)
			{
			echo "<p>Datos de Miembros de ADESCO</p>";
			echo $con->consultar("lideres,cargo,ocupacion,nivelacad,adesco","idlider as 'ID',lideres.nombre as 'Nombre del Lider',fechanac as 'Fecha Nacimiento',nivelacad.nivel as 'Nivel Academico',cargo.cargo as 'Cargo en Directiva',feinicio as 'Inicio en Directiva',fevencrede as 'Fecha Expedici&oacute;n en Directiva',adesco.nombre as 'Nombre ADESCO',ocupacion.ocupacion as 'Ocupaci&oacute;n' ","cargo.idcargo=lideres.idcargo and ocupacion.idocupacion=lideres.idocupacion and nivelacad.idnivelacad=lideres.idnivelacad and adesco.idnit=lideres.idnit and adesco.idnit='$idc'");
			}
			}
			if (@$_POST["idnit"]==0)
			{
			if (@$_POST["lideres"]==1)
			{
			echo "<p>Datos de Miembros de ADESCO</p>";
			echo $con->consultar("lideres,cargo,ocupacion,nivelacad,adesco","idlider as 'ID',lideres.nombre as 'Nombre del Lider',fechanac as 'Fecha Nacimiento',nivelacad.nivel as 'Nivel Academico',cargo.cargo as 'Cargo en Directiva',feinicio as 'Inicio en Directiva',fevencrede as 'Fecha Expedici&oacute;n en Directiva',adesco.nombre as 'Nombre ADESCO',ocupacion.ocupacion as 'Ocupaci&oacute;n' ","cargo.idcargo=lideres.idcargo and ocupacion.idocupacion=lideres.idocupacion and nivelacad.idnivelacad=lideres.idnivelacad and adesco.idnit=lideres.idnit");
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