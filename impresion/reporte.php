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
		 
		 
		 
		 
			<?php
			$con=new consultas(); 
			//tabla , campo y condicion 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["riesgo"]==1)
			{
			echo "<p>Datos de Riesgo en la Comunidad</p>";
			echo $con->consultar("riesgo,comunidad,obras","riesgo.idriesgo as 'ID',nombreri as 'Nombre Riesgo Amenaza',fechain as 'Fecha Inicio',fechafi as 'Fecha Solucionado',comunidad.nombre as 'Comunidad',obras.nombre as 'Tipo Obra'","comunidad.idcomunidad=riesgo.idcomunidad and obras.idobras=riesgo.idobras and riesgo.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["riesgo"]==1)
			{
			echo "<p>Datos de Riesgo en la Comunidad</p>";
			echo $con->consultar("riesgo,comunidad,obras","riesgo.idriesgo as 'ID',nombreri as 'Nombre Riesgo Amenaza',fechain as 'Fecha Inicio',fechafi as 'Fecha Solucionado',comunidad.nombre as 'Comunidad',obras.nombre as 'Tipo Obra'","comunidad.idcomunidad=riesgo.idcomunidad and obras.idobras=riesgo.idobras");
			}
			}
			?>
			
			
			<?php
			$con=new consultas(); 
			//tabla , campo y condicion 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["plan"]==1)
			{
			echo "<p>Datos del Plan de Emergencia</p>";
			echo $con->consultar("planemer,riesgo","planemer.idplanemer as 'ID',nombre as 'Nombre',planemer.fechain as 'Fecha Inicio',planemer.fechafi as 'Fecha Final',encargados as 'Encargados del Plan',riesgo.nombreri as 'Nombre Riesgo'","riesgo.idriesgo=planemer.idriesgo and planemer.idriesgo='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["plan"]==1)
			{
			echo "<p>Datos del Plan de Emergencia</p>";
			echo $con->consultar("planemer,riesgo","planemer.idplanemer as 'ID',nombre as 'Nombre',planemer.fechain as 'Fecha Inicio',planemer.fechafi as 'Fecha Final',encargados as 'Encargados del Plan',riesgo.nombreri as 'Nombre Riesgo'","riesgo.idriesgo=planemer.idriesgo");
			}
			}
			?>

					
				
			
			
			
			
			<?php
			$con=new consultas(); 
			//tabla , campo y condicion 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["salud"]==1)
			{
			echo "<p>Datos de Instituci&oacute;nes de Salud</p>";
			echo $con->consultar("salud,terreno,condicion,comunidad,tiposalud","salud.idsalud as 'ID',tiposalud.tipo as 'Tipo',salud.nombre as 'Nombre',salud.equipo as 'Equipo Disponible',medicina as 'Medicina Disponible',area as '&Aacute;rea',salud.fundacion as 'Fecha Ignauraci&oacute;n',terreno.tipo as 'Terreno Legal',condicion.condicion as 'Condicion',comunidad.nombre as 'Nombre Comunidad'","tiposalud.idtiposalud=salud.idtiposalud and terreno.idterreno=salud.idterreno and condicion.idcondicion=salud.idcondicion and comunidad.idcomunidad=salud.idcomunidad and salud.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["salud"]==1)
			{
			echo "<p>Datos de Instituci&oacute;nes de Salud</p>";
			echo $con->consultar("salud,terreno,condicion,comunidad,tiposalud","salud.idsalud as 'ID',tiposalud.tipo as 'Tipo',salud.nombre as 'Nombre',salud.equipo as 'Equipo Disponible',medicina as 'Medicina Disponible',area as '&Aacute;rea',salud.fundacion as 'Fecha Ignauraci&oacute;n',terreno.tipo as 'Terreno Legal',condicion.condicion as 'Condicion',comunidad.nombre as 'Nombre Comunidad'","tiposalud.idtiposalud=salud.idtiposalud and terreno.idterreno=salud.idterreno and condicion.idcondicion=salud.idcondicion and comunidad.idcomunidad=salud.idcomunidad");
			}
			}
			
			?>
			
			
			
			<?php
			$con=new consultas(); 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["recreacion"]==1)
			{
			echo "<p>Datos de Zona Verdes Recreaci&oacute;n</p>";
			echo $con->consultar("recreacion,tiporecre,terreno,condicion,comunidad","recreacion.idrecreacion as 'ID',tiporecre.tipo as 'Tipo',recreacion.nombre as 'Nombre',cbask as 'Cancha Basketball',cfot as 'Cancha Fotball',cvol as 'Cancha Vollyball',cotra as 'Otra Cancha',frevisita as 'D&iacute;a as Visita',visitantes as 'Visitantes',fundacion as 'Fecha Ignauraci&oacute;n',condicion.condicion as 'Condicion Infraestructura',terreno.tipo as 'Terreno Legal',comunidad.nombre as 'Nombre Comunidad'","tiporecre.idtiporecre=recreacion.idtiporecre and terreno.idterreno=recreacion.idterreno and condicion.idcondicion=recreacion.idcondicion and comunidad.idcomunidad=recreacion.idcomunidad and recreacion.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["recreacion"]==1)
			{
			echo "<p>Datos de Zona Verdes Recreaci&oacute;n</p>";
			echo $con->consultar("recreacion,tiporecre,terreno,condicion,comunidad","recreacion.idrecreacion as 'ID',tiporecre.tipo as 'Tipo',recreacion.nombre as 'Nombre',cbask as 'Cancha Basketball',cfot as 'Cancha Fotball',cvol as 'Cancha Vollyball',cotra as 'Otra Cancha',frevisita as 'D&iacute;a as Visita',visitantes as 'Visitantes',fundacion as 'Fecha Ignauraci&oacute;n',condicion.condicion as 'Condicion Infraestructura',terreno.tipo as 'Terreno Legal',comunidad.nombre as 'Nombre Comunidad'","tiporecre.idtiporecre=recreacion.idtiporecre and terreno.idterreno=recreacion.idterreno and condicion.idcondicion=recreacion.idcondicion and comunidad.idcomunidad=recreacion.idcomunidad");
			}
			}
			
			?>
			
			
			
			<?php
			$con=new consultas(); 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["educativa"]==1)
			{
			echo "<p>Datos de Instituciones Educativas</p>";
			echo $con->consultar("escuela,instedu,condicion,terreno,comunidad","escuela.idescuela as 'ID',escuela.nombre as 'Nombre Instituci&oacute;n',grados as 'Grado Imparten',ninos as 'Poblaci&oacuten Ni&ntilde;os',ninas as 'Poblaci&oacuten Ni&ntilde;as',turnos as 'Turnos',area as '&Aacute;rea',docentes as 'Poblaci&oacute;n Docente',fundacion as 'Fecha Ignauraci&oacute;n',condicion.condicion as 'Condici&oacute;n Infraestructura',terreno.tipo as 'Terreno Legal',instedu.institucion as 'Tipo de Instituci&oacute;n Educativa',comunidad.nombre as 'Nombre Comunidad'","instedu.idinstedu=escuela.idinstedu and condicion.idcondicion=escuela.idcondicion and terreno.idterreno=escuela.idterreno and comunidad.idcomunidad=escuela.idcomunidad and escuela.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["educativa"]==1)
			{
			echo "<p>Datos de Instituciones Educativas</p>";
			echo $con->consultar("escuela,instedu,condicion,terreno,comunidad","escuela.idescuela as 'ID',escuela.nombre as 'Nombre Instituci&oacute;n',grados as 'Grado Imparten',ninos as 'Poblaci&oacuten Ni&ntilde;os',ninas as 'Poblaci&oacuten Ni&ntilde;as',turnos as 'Turnos',area as '&Aacute;rea',docentes as 'Poblaci&oacute;n Docente',fundacion as 'Fecha Ignauraci&oacute;n',condicion.condicion as 'Condici&oacute;n Infraestructura',terreno.tipo as 'Terreno Legal',instedu.institucion as 'Tipo de Instituci&oacute;n Educativa',comunidad.nombre as 'Nombre Comunidad'","instedu.idinstedu=escuela.idinstedu and condicion.idcondicion=escuela.idcondicion and terreno.idterreno=escuela.idterreno and comunidad.idcomunidad=escuela.idcomunidad");
			}
			}
			
			?>
			
			
			
			<?php
			$con=new consultas(); 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["comunal"]==1)
			{
			echo "<p>Datos de las Comunales</p>";
			echo $con->consultar("comunal, terreno, comunidad, condicion","comunal.idcomunal as 'ID',comunal.nombre as 'Nombre',area as '&Aacute;rea Terreno',fundacion as 'Fecha Ignauraci&oacute;n',terreno.tipo as 'Terreno Legal',condicion.condicion as 'Condicion Infraestructura',comunidad.nombre as 'Nombre Comunidad'","terreno.idterreno=comunal.idterreno and condicion.idcondicion=comunal.idcondicion and comunidad.idcomunidad=comunal.idcomunidad and comunal.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["comunal"]==1)
			{
			echo "<p>Datos de las Comunales</p>";
			echo $con->consultar("comunal, terreno, comunidad, condicion","comunal.idcomunal as 'ID',comunal.nombre as 'Nombre',area as '&Aacute;rea Terreno',fundacion as 'Fecha Ignauraci&oacute;n',terreno.tipo as 'Terreno Legal',condicion.condicion as 'Condicion Infraestructura',comunidad.nombre as 'Nombre Comunidad'","terreno.idterreno=comunal.idterreno and condicion.idcondicion=comunal.idcondicion and comunidad.idcomunidad=comunal.idcomunidad");
			}
			}
			
			?>
			

			
			<?php
			$con=new consultas(); 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["viviendas"]==1)
			{
			echo "<p>Datos de Vivienda de las Familias</p>";
			echo $con->consultar("vivienda,tipovivi,comunidad,tipoletrina,terreno","idvivienda as 'ID',tipovivi.tipo as 'Tipo de Vivienda',direccion as 'Direcci&oacute;n',area as 'Area en Metros Cuadrados',comunidad.nombre as 'Nombre Comunidad',tipoletrina.tipo as 'Tipo de Letrina',terreno.tipo as 'Estado Legal Terreno' ,saguapotable as 'Agua Potable',salumbrado as 'Alumbrado Electrico',saguanegras as 'Aguas Negras',seelectricidad as 'Energia Electrica',strenaseo as 'Tren de Aseo',migracion as 'Familia Migracion'","tipovivi.idtipovivi=vivienda.idtipovivi and comunidad.idcomunidad=vivienda.idcomunidad and tipoletrina.idtipoletrina=vivienda.idtipoletrina and terreno.idterreno=vivienda.idterreno and vivienda.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["viviendas"]==1)
			{
			echo "<p>Datos de Vivienda de las Familias</p>";
			echo $con->consultar("vivienda,tipovivi,comunidad,tipoletrina,terreno","idvivienda as 'ID',tipovivi.tipo as 'Tipo de Vivienda',direccion as 'Direcci&oacute;n',area as 'Area en Metros Cuadrados',comunidad.nombre as 'Nombre Comunidad',tipoletrina.tipo as 'Tipo de Letrina',terreno.tipo as 'Estado Legal Terreno' ,saguapotable as 'Agua Potable',salumbrado as 'Alumbrado Electrico',saguanegras as 'Aguas Negras',seelectricidad as 'Energia Electrica',strenaseo as 'Tren de Aseo',migracion as 'Familia Migracion'","tipovivi.idtipovivi=vivienda.idtipovivi and comunidad.idcomunidad=vivienda.idcomunidad and tipoletrina.idtipoletrina=vivienda.idtipoletrina and terreno.idterreno=vivienda.idterreno");
			}
			}
			
			?>
			
			
							
			<?php
			$con=new consultas(); 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["miembros"]==1)
			{
			echo "<p>Datos de Miembros de Familia</p>";
			echo $con->consultar("persona,vivienda","idpersona as'Codigo',infancy as '0-4 a&ntilde;os',childhood as'5-12 a&ntilde;os',adolescense as'13-17 a&ntilde;os',adulthood as '18-30 a&ntilde;os',middleage as'31-60 a&ntilde;os',oldage as 'Mayor 61 a&ntilde;os',mujeres as 'Mujeres',hombres as 'Hombres',jefe1 as 'Jefe de Familia ',ocupacion1 as 'Ocupaci&oacute;n',nivelacademico1 as 'Nivel Academico',jefe2 as 'Jefe de Familia 2',ocupacion2 as 'Ocupaci&oacute;n',nivelacademico2 as 'Nivel Academico',vivienda.direccion as 'Direcci&oacute;n'","vivienda.idvivienda=persona.idvivienda persona.idcomunidad='$idc'");
			}	
			}
			if (@$_POST["idcomunidad"]==0)
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
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["produccion"]==1)
			{
			echo "<p>Datos de Producci&oacute;n de las Familias</p>";
			echo $con->consultar("produccion,tipoproduce,comunidad","idproduccion as 'ID',tipoproduce.tipo as 'Tipo Producci&oacute;n',produccion.nombre as 'Nombre',estacion as 'Estacion Producci&oacute;n',area as '&Aacute;rea',cantidad as 'Cantidad',formacrianza as 'Forma Crianza',formacultivo as 'Forma Cultivo',productores as 'Productores',cantproduc as 'Cantidad Productores',costo as 'Costo Cultivo',consumo as 'Consumo de Cosecha',comercio as 'Comercio',ingreso as 'Ingreso Economicos'","produccion.idtipoproduce=tipoproduce.idtipoproduce and produccion.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["produccion"]==1)
			{
			echo "<p>Datos de Producci&oacute;n de las Familias</p>";
			echo $con->consultar("produccion,tipoproduce,comunidad","idproduccion as 'ID',tipoproduce.tipo as 'Tipo Producci&oacute;n',produccion.nombre as 'Nombre',estacion as 'Estacion Producci&oacute;n',area as '&Aacute;rea',cantidad as 'Cantidad',formacrianza as 'Forma Crianza',formacultivo as 'Forma Cultivo',productores as 'Productores',cantproduc as 'Cantidad Productores',costo as 'Costo Cultivo',consumo as 'Consumo de Cosecha',comercio as 'Comercio',ingreso as 'Ingreso Economicos'","produccion.idtipoproduce=tipoproduce.idtipoproduce");
			}
			}
			?>
			
			
			
			<?php
			$con=new consultas(); 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["proyectos"]==1)
			{
			echo "<p>Datos de Proyectos</p>";
			echo $con->consultar("proyectos,tipoayuda","idproyectos as 'ID',proyectos.nombre as 'Nombre del Proyecto',tipoayuda.nombreinsti as 'Nombre de la Instituci&oacute;n',fechain as 'Fecha Inici&oacute; Proyecto',fechafi as 'Fecha Finaliz&oacute; Proyecto'"," tipoayuda.idtipoayuda=proyectos.idtipoayuda and proyectos.idtipoayuda='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["proyectos"]==1)
			{
			echo "<p>Datos de Proyectos</p>";
			echo $con->consultar("proyectos,tipoayuda","idproyectos as 'ID',proyectos.nombre as 'Nombre del Proyecto',tipoayuda.nombreinsti as 'Nombre de la Instituci&oacute;n',fechain as 'Fecha Inici&oacute; Proyecto',fechafi as 'Fecha Finaliz&oacute; Proyecto'"," tipoayuda.idtipoayuda=proyectos.idtipoayuda");
			}
			}
			
			?>
			
			  
			  
			<?php
			$con=new consultas(); 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["cooperantes"]==1)
			{
			echo "<p>Datos de Riesgo en la Comunidad</p>";
			echo $con->consultar("tipoayuda, comunidad","tipoayuda.idtipoayuda as 'ID',nombreinsti as 'Nombre Institucion',comunidad.nombre as 'Comunidad'","comunidad.idcomunidad=tipoayuda.idcomunidad and tipoayuda.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["cooperantes"]==1)
			{
			echo "<p>Datos de Riesgo en la Comunidad</p>";
			echo $con->consultar("tipoayuda, comunidad","tipoayuda.idtipoayuda as 'ID',nombreinsti as 'Nombre Institucion',comunidad.nombre as 'Comunidad'","comunidad.idcomunidad=tipoayuda.idcomunidad");
			}
			}
			
			?>
		
			
			
			<?php
			$con=new consultas(); 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["calle"]==1)
			{
			echo "<p>Datos de Calles y Avenidas de la Comunidades</p>";
			echo $con->consultar("calle,comunidad,tipocalle,condicion","idcalle as 'ID',comunidad.nombre as 'Nombre Comunidad',calle.nombre as 'Nombre Calle',tipocalle.tipo as 'Tipo',condicion.condicion as 'Condicion Calle Avenida'","comunidad.idcomunidad=calle.idcomunidad and tipocalle.idtipocalle=calle.idtipocalle and condicion.idcondicion=calle.idcondicion and calle.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["calle"]==1)
			{
			echo "<p>Datos de Calles y Avenidas de la Comunidades</p>";
			echo $con->consultar("calle,comunidad,tipocalle,condicion","idcalle as 'ID',comunidad.nombre as 'Nombre Comunidad',calle.nombre as 'Nombre Calle',tipocalle.tipo as 'Tipo',condicion.condicion as 'Condicion Calle Avenida'","comunidad.idcomunidad=calle.idcomunidad and tipocalle.idtipocalle=calle.idtipocalle and condicion.idcondicion=calle.idcondicion");
			}
			}
			
			?>
		
			
						
			<?php
			$con=new consultas(); 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["flora"]==1)
			{
			echo "<p>Datos de Recurso Flora</p>";
			echo $con->consultar("recursoflora,medioamb,comunidad,especieflora","recursoflora.idrecursoflora as 'ID',especieflora.nombre as 'Flora',zona as 'Zona Geograf&iacute;ca',area as 'Are en Metros',medioamb.ambiente as 'Medio Ambiente',comunidad.nombre as 'Nombre Comunidad'","especieflora.idespecieflora=recursoflora.idespecieflora and medioamb.idmedioamb=recursoflora.idmedioamb and comunidad.idcomunidad=recursoflora.idcomunidad and recursoflora.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["flora"]==1)
			{
			echo "<p>Datos de Recurso Flora</p>";
			echo $con->consultar("recursoflora,medioamb,comunidad,especieflora","recursoflora.idrecursoflora as 'ID',especieflora.nombre as 'Flora',zona as 'Zona Geograf&iacute;ca',area as 'Are en Metros',medioamb.ambiente as 'Medio Ambiente',comunidad.nombre as 'Nombre Comunidad'","especieflora.idespecieflora=recursoflora.idespecieflora and medioamb.idmedioamb=recursoflora.idmedioamb and comunidad.idcomunidad=recursoflora.idcomunidad");
			}
			}
			
			?>
			

						
			<?php
			$con=new consultas(); 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["fauna"]==1)
			{
			echo "<p>Datos de Recurso Fauna</p>";
			echo $con->consultar("recursofauna,comunidad,especiefauna,medioamb","idrecursofauna as 'ID',especiefauna.nombre as 'Fauna',zona as 'Zona Geograf&iacute;ca',cantidad as 'Cantidad Existente',medioamb.ambiente as 'Medio Ambiente',comunidad.nombre as 'Comunidad'","comunidad.idcomunidad=recursofauna.idcomunidad and medioamb.idmedioamb=recursofauna.idmedioamb and especiefauna.idespeciefauna=recursofauna.idespeciefauna and recursofauna.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["fauna"]==1)
			{
			echo "<p>Datos de Recurso Fauna</p>";
			echo $con->consultar("recursofauna,comunidad,especiefauna,medioamb","idrecursofauna as 'ID',especiefauna.nombre as 'Fauna',zona as 'Zona Geograf&iacute;ca',cantidad as 'Cantidad Existente',medioamb.ambiente as 'Medio Ambiente',comunidad.nombre as 'Comunidad'","comunidad.idcomunidad=recursofauna.idcomunidad and medioamb.idmedioamb=recursofauna.idmedioamb and especiefauna.idespeciefauna=recursofauna.idespeciefauna");
			}
			}
		
			?>
			
			
						
			<?php
			$con=new consultas(); 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["clima"]==1)
			{
			echo "<p>Datos del Clima en Comunidades</p>";
			echo $con->consultar("clima,medioamb,comunidad","idclima as 'ID',clima as 'Clima',medioamb.ambiente as 'Medio Ambiente',comunidad.nombre as 'Nombre Comunidad'","medioamb.idmedioamb=clima.idmedioamb and comunidad.idcomunidad=clima.idcomunidad and clima.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["clima"]==1)
			{
			echo "<p>Datos del Clima en Comunidades</p>";
			echo $con->consultar("clima,medioamb,comunidad","idclima as 'ID',clima as 'Clima',medioamb.ambiente as 'Medio Ambiente',comunidad.nombre as 'Nombre Comunidad'","medioamb.idmedioamb=clima.idmedioamb and comunidad.idcomunidad=clima.idcomunidad");
			}
			}
			
			?>
			

								
			<?php
			$con=new consultas(); 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["agua"]==1)
			{
			echo "<p>Datos de Recurso Agua</p>";
			echo $con->consultar("recursoagua,tiporeagua,medioamb,comunidad","recursoagua.idrecursoagua as 'ID',tiporeagua.recurso as 'Recurso',area as '&Aacute;rea en Metros',zona as 'Zona Geograf&iacute;a',medioamb.ambiente as 'Medio Ambiente',comunidad.nombre as 'Nombre Comunidad'","tiporeagua.idtiporeagua=recursoagua.idtiporeagua and medioamb.idmedioamb=recursoagua.idmedioamb and comunidad.idcomunidad=recursoagua.idcomunidad and recursoagua.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["agua"]==1)
			{
			echo "<p>Datos de Recurso Agua</p>";
			echo $con->consultar("recursoagua,tiporeagua,medioamb,comunidad","recursoagua.idrecursoagua as 'ID',tiporeagua.recurso as 'Recurso',area as '&Aacute;rea en Metros',zona as 'Zona Geograf&iacute;a',medioamb.ambiente as 'Medio Ambiente',comunidad.nombre as 'Nombre Comunidad'","tiporeagua.idtiporeagua=recursoagua.idtiporeagua and medioamb.idmedioamb=recursoagua.idmedioamb and comunidad.idcomunidad=recursoagua.idcomunidad");
			}
			}
		
			?>
			
			
			
			<?php
			$con=new consultas(); 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["adesco"]==1)
			{
			echo "<p>Datos de ADESCO</p>";
			echo $con->consultar("adesco,comunidad","idnit as 'ID',asamblea as 'Fecha 1er Asamblea General',juntadirectiva as 'Fecha formaci&oacute;n de Directiva',acuerdomuni as 'Fecha Acuerdo Municipal',quien as 'Persona Realizo Juramentaci&oacute;n',fechaju as 'Fecha de Juramentaci&oacute;n',carta as 'Fecha Recibida Carta de Constituci&oacute;n',comunidad.nombre as 'Comunidad que Pertenece'","comunidad.idcomunidad=adesco.idcomunidad and adesco.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
			{
			if (@$_POST["adesco"]==1)
			{
			echo "<p>Datos de ADESCO</p>";
			echo $con->consultar("adesco,comunidad","idnit as 'ID',asamblea as 'Fecha 1er Asamblea General',juntadirectiva as 'Fecha formaci&oacute;n de Directiva',acuerdomuni as 'Fecha Acuerdo Municipal',quien as 'Persona Realizo Juramentaci&oacute;n',fechaju as 'Fecha de Juramentaci&oacute;n',carta as 'Fecha Recibida Carta de Constituci&oacute;n',comunidad.nombre as 'Comunidad que Pertenece'","comunidad.idcomunidad=adesco.idcomunidad");
			}
			}
		
			?>
			
			
			
			<?php
			$con=new consultas(); 
			$idc=$_POST["idcomunidad"];
			if (@$_POST["idcomunidad"] >=1)
			{
			if (@$_POST["lideres"]==1)
			{
			echo "<p>Datos de Miembros de ADESCO</p>";
			echo $con->consultar("lideres,cargo,ocupacion,nivelacad,adesco","idlider as 'ID',lideres.nombre as 'Nombre del Lider',fechanac as 'Fecha Nacimiento',nivelacad.nivel as 'Nivel Academico',cargo.cargo as 'Cargo en Directiva',feinicio as 'Inicio en Directiva',fevencrede as 'Fecha Expedici&oacute;n en Directiva',adesco.nombre as 'Nombre ADESCO',ocupacion.ocupacion as 'Ocupaci&oacute;n' ","cargo.idcargo=lideres.idcargo and ocupacion.idocupacion=lideres.idocupacion and nivelacad.idnivelacad=lideres.idnivelacad and adesco.idnit=lideres.idnit and adesco.idcomunidad='$idc'");
			}
			}
			if (@$_POST["idcomunidad"]==0)
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