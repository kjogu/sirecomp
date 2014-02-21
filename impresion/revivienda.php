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
			
			$idcc=$_POST["idvivienda"];
			if (@$_POST["idvivienda"] >=1)
			{
			echo "<p>Datos de Vivienda</p>";
			echo $con->consultar("vivienda,tipovivi,comunidad,tipoletrina,terreno","idvivienda as 'ID',tipovivi.tipo as 'Tipo de Vivienda',direccion as 'Direcci&oacute;n',area as 'Area en Metros Cuadrados',comunidad.nombre as 'Nombre Comunidad',tipoletrina.tipo as 'Tipo de Letrina',terreno.tipo as 'Estado Legal Terreno' ,saguapotable as 'Agua Potable',salumbrado as 'Alumbrado Electrico',saguanegras as 'Aguas Negras',seelectricidad as 'Energia Electrica',strenaseo as 'Tren de Aseo',migracion as 'Familia Migracion'","tipovivi.idtipovivi=vivienda.idtipovivi and comunidad.idcomunidad=vivienda.idcomunidad and tipoletrina.idtipoletrina=vivienda.idtipoletrina and terreno.idterreno=vivienda.idterreno and vivienda.idvivienda='$idcc'");
			
			//else
			//echo $con->consultar("comunidad,depa,municipio,zona,sector,limitegeo","depa.departamento as 'Departamento',municipio.nombre as 'Municipio',zona.nombre as 'Zona',sector.nombre as 'Sector',limitegeo.nombre as 'Direcci&oacute;n',comunidad.nombre as 'Nombre'","depa.iddepa=comunidad.iddepa and comunidad.idmunicipio=municipio.idmunicipio and comunidad.idzona=zona.idzona and comunidad.idsector=sector.idsector and comunidad.idlimitegeo=limitegeo.idlimitegeo");
			}
			?>
		     
			
			<?php
			$con=new consultas(); 
			//tabla , campo y condicion 
			$idc=$_POST["idvivienda"];
			if (@$_POST["viviendas"]>=1)
			{
			echo "<p>Datos de  las Viviendas</p>";
			echo $con->consultar("vivienda,tipovivi,comunidad,tipoletrina,terreno","idvivienda as 'ID',tipovivi.tipo as 'Tipo de Vivienda',direccion as 'Direcci&oacute;n',area as 'Area en Metros Cuadrados',comunidad.nombre as 'Nombre Comunidad',tipoletrina.tipo as 'Tipo de Letrina',terreno.tipo as 'Estado Legal Terreno' ,saguapotable as 'Agua Potable',salumbrado as 'Alumbrado Electrico',saguanegras as 'Aguas Negras',seelectricidad as 'Energia Electrica',strenaseo as 'Tren de Aseo',migracion as 'Familia Migracion'","tipovivi.idtipovivi=vivienda.idtipovivi and comunidad.idcomunidad=vivienda.idcomunidad and tipoletrina.idtipoletrina=vivienda.idtipoletrina and terreno.idterreno=vivienda.idterreno ");
			}
			?>
			
			
			<?php
			$con=new consultas(); 
			$idcc=$_POST["idvivienda"];
			if (@$_POST["idvivienda"] >=1)
			{
			if (@$_POST["miembros"]==1)
			{
			echo "<p>Datos de Miembros de Familia</p>";
			echo $con->consultar("persona,vivienda","idpersona as'Codigo',infancy as '0-4 a&ntilde;os',childhood as'5-12 a&ntilde;os',adolescense as'13-17 a&ntilde;os',adulthood as '18-30 a&ntilde;os',middleage as'31-60 a&ntilde;os',oldage as 'Mayor 61 a&ntilde;os',mujeres as 'Mujeres',hombres as 'Hombres',jefe1 as 'Jefe de Familia ',ocupacion1 as 'Ocupaci&oacute;n',nivelacademico1 as 'Nivel Academico',jefe2 as 'Jefe de Familia 2',ocupacion2 as 'Ocupaci&oacute;n',nivelacademico2 as 'Nivel Academico',vivienda.direccion as 'Direcci&oacute;n'","vivienda.idvivienda=persona.idvivienda and persona.idvivienda='$idcc'");
			}	
			}
			if (@$_POST["idvivienda"]==0)
			{
			if (@$_POST["miembros"]==1)
			{
			echo "<p>Datos de Miembros de Familia</p>";
			echo $con->consultar("persona,vivienda","idpersona as'Codigo',infancy as '0-4 a&ntilde;os',childhood as'5-12 a&ntilde;os',adolescense as'13-17 a&ntilde;os',adulthood as '18-30 a&ntilde;os',middleage as'31-60 a&ntilde;os',oldage as 'Mayor 61 a&ntilde;os',mujeres as 'Mujeres',hombres as 'Hombres',jefe1 as 'Jefe de Familia ',ocupacion1 as 'Ocupaci&oacute;n',nivelacademico1 as 'Nivel Academico',jefe2 as 'Jefe de Familia 2',ocupacion2 as 'Ocupaci&oacute;n',nivelacademico2 as 'Nivel Academico',vivienda.direccion as 'Direcci&oacute;n'","vivienda.idvivienda=persona.idvivienda");
			}	
			}
						
			?>
			
			<?php
			$con=new consultas(); 
			//tabla , campo y condicion 
			$idcc=$_POST["idvivienda"];
			if (@$_POST["idvivienda"] >=1)
			{
			if (@$_POST["produccion"]==1)
			{
			echo "<p>Datos de Producci&oacute;n de las Familias</p>";
			echo $con->consultar("produccion,tipoproduce","idproduccion as 'ID',tipoproduce.tipo as 'Tipo Producci&oacute;n',produccion.nombre as 'Nombre',estacion as 'Estacion Producci&oacute;n',produccion.area as '&Aacute;rea',cantidad as 'Cantidad',formacrianza as 'Forma Crianza',formacultivo as 'Forma Cultivo',productores as 'Productores',cantproduc as 'Cantidad Productores',costo as 'Costo Cultivo',consumo as 'Consumo de Cosecha',comercio as 'Comercio',ingreso as 'Ingreso Economicos'","produccion.idtipoproduce=tipoproduce.idtipoproduce and produccion.idvivienda='$idcc'");
			}
			}
			if (@$_POST["idvivienda"]==0)
			{
			if (@$_POST["produccion"]==1)
			{
			echo "<p>Datos de Producci&oacute;n de las Familias</p>";
			echo $con->consultar("produccion,tipoproduce","idproduccion as 'ID',tipoproduce.tipo as 'Tipo Producci&oacute;n',produccion.nombre as 'Nombre',estacion as 'Estacion Producci&oacute;n',produccion.area as '&Aacute;rea',cantidad as 'Cantidad',formacrianza as 'Forma Crianza',formacultivo as 'Forma Cultivo',productores as 'Productores',cantproduc as 'Cantidad Productores',costo as 'Costo Cultivo',consumo as 'Consumo de Cosecha',comercio as 'Comercio',ingreso as 'Ingreso Economicos'","produccion.idtipoproduce=tipoproduce.idtipoproduce");
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