<?php
include("../libreria/dbdiagnostico.php");
$uu=usuario();
//buscar el reg a modif
if (isset($_GET['id']))
	{
			
		$id=$_GET['id'];
		$b=new consultas();
		$modiinfa=$b->buscarvalor("persona","infancy","idpersona='$id'");
		$modichildh=$b->buscarvalor("persona","childhood","idpersona='$id'");
		$modiadoles=$b->buscarvalor("persona","adolescense","idpersona='$id'");
		$modiadult=$b->buscarvalor("persona","adulthood","idpersona='$id'");		
		$modimidd=$b->buscarvalor("persona","middleage","idpersona='$id'");
		$modiold=$b->buscarvalor("persona","oldage","idpersona='$id'");
		$moditotal2=$b->buscarvalor("persona","total2","idpersona='$id'");
		$modimujer=$b->buscarvalor("persona","mujeres","idpersona='$id'");
		$modihombre=$b->buscarvalor("persona","hombres","idpersona='$id'");
		$moditotal3=$b->buscarvalor("persona","total3","idpersona='$id'");
		$modijefe1=$b->buscarvalor("persona","jefe1","idpersona='$id'");
		$modiocupacion1=$b->buscarvalor("persona","ocupacion1","idpersona='$id'");
		$modinivel1=$b->buscarvalor("persona","nivelacademico1","idpersona='$id'");
		$modijefe2=$b->buscarvalor("persona","jefe2","idpersona='$id'");
		$modiocupacion2=$b->buscarvalor("persona","ocupacion2","idpersona='$id'");
		$modinivel2=$b->buscarvalor("persona","nivelacademico2","idpersona='$id'");
		$modiidvivienda=$b->buscarvalor("persona","idvivienda","idpersona='$id'");
			
	}
 	if (isset($_GET['idb']))
	{
			
		$id=$_GET['idb'];
		$b=new acciones();
		$mod1=$b->borrar("persona","idpersona='$id'");
		 echo "<script>alert('Datos borrados');</script>";		
			
	}
?>
<html>
    <head>
        <title>Personas</title>
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
						
						<form action="modificarpe.php" method="get">
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
		<form class="comunidad" method="POST" action="modificarpe.php" >
			<fieldset>
                <legend>
                Datos de Personas
                </legend>
			
			<table id="tabla">
                     
            <tr><td><label>Codigo:</label></td>
			<td><input type="text" size="4" name="codigo" id="codigo" value="<?php echo $id; ?>" readonly ></td></tr>
			
			<tr><td></td><td colspan="2"><label> Cantidad de Miembros con la edad de:</label></td>
			
			<tr>
			<td><label>0-4 a&ntilde;os</label></td>
			<td><input type="text" size="4" name="infa" value="<?php echo $modiinfa; ?>" title='Digite cantidad' required="required"  onchange="total2.value=parseInt(infa.value)+parseInt(childh.value)+parseInt(adoles.value)+parseInt(adult.value)+parseInt(midd.value)+parseInt(old.value);"></td>
            
			<td><label>5-12</label></td>
			<td><input type="text" size="4" name="childh" value="<?php echo $modichildh; ?>" title='Digite cantidad' required="required" onchange="total2.value=parseInt(infa.value)+parseInt(childh.value)+parseInt(adoles.value)+parseInt(adult.value)+parseInt(midd.value)+parseInt(old.value);"></td>
            
			<td><label>13-17</label></td>
			<td><input type="text" size="4" name="adoles" value="<?php echo $modiadoles; ?>" title='Digite cantidad' required="required" onchange="total2.value=parseInt(infa.value)+parseInt(childh.value)+parseInt(adoles.value)+parseInt(adult.value)+parseInt(midd.value)+parseInt(old.value);"></td>
			</tr>
            
			<tr>
			<td><label>18-30</label></td>
			<td><input type="text" size="4" name="adult" value="<?php echo $modiadult; ?>" title='Digite cantidad' required="required" onchange="total2.value=parseInt(infa.value)+parseInt(childh.value)+parseInt(adoles.value)+parseInt(adult.value)+parseInt(midd.value)+parseInt(old.value);"></td>
            
			<td><label>31-60</label></td>
			<td><input type="text" size="4" name="midd" value="<?php echo $modimidd; ?>" title='Digite cantidad' required="required" onchange="total2.value=parseInt(infa.value)+parseInt(childh.value)+parseInt(adoles.value)+parseInt(adult.value)+parseInt(midd.value)+parseInt(old.value);"></td>
            
			<td><label>Mayor a 60</label></td>
			<td><input type="text" size="4" name="old" value="<?php echo $modiold; ?>" title='Digite cantidad' required="required" onchange="total2.value=parseInt(infa.value)+parseInt(childh.value)+parseInt(adoles.value)+parseInt(adult.value)+parseInt(midd.value)+parseInt(old.value);"></td>
            
			<tr>
			<td></td><td><label>Total</label></td></tr>
			<td></td><td><input type="text" size="4" name="total2" value="<?php echo $moditotal2; ?>" title='Digite cantidad' required="required"></td>
			
			
			<tr>
			<td><label>Mujeres</label></td>
			<td><input type="text" size="4" name="mujer" value="<?php echo $modimujer; ?>" title='Digite cantidad' required="required" onchange="total3.value=parseInt(mujer.value)+parseInt(hombre.value);"></td>
			
			<td><label>Hombres</label></td>
			<td><input type="text" size="4" name="hombre" value="<?php echo $modihombre; ?>" title='Digite cantidad' required="required" onchange="total3.value=parseInt(mujer.value)+parseInt(hombre.value);"></td>
			</tr>
			
			<tr>
			<td></td><td><label>Total</label></td></tr>
			<td></td><td><input type="text" size="4" name="total3" value="<?php echo $moditotal3; ?>" title='Digite cantidad' required="required"></td>
			
			
            <tr><td></td><td colspan="2"><label>Responsable de la Familia</label></td></tr>
			
			<tr>
			<td><label>Jefe de Familia</label></td>
			<td><select name="jefe1" >
				  <option value="<?php echo $modijefe1;?>"><?php echo $modijefe1;?></option>
				  <option value="Padre">Padre</option> 
				  <option value="Madre" >madre</option>
				  <option value="Tio">Tio</option>
				  <option value="Tia">Tia</option>
				  <option value="Abuela">Abuela</option>
				  <option value="Abuelo">Abuelo</option>
				  <option value="Otro">Otro</option>
				</select></td></td>
			
			<td><label>Jefe de Familia</label></td>
			<td><select name="jefe2">
				  <option value="<?php echo $modijefe2;?>"><?php echo $modijefe2;?></option>
				  <option value="Padre">Padre</option> 
				  <option value="Madre">madre</option>
				  <option value="Tio">Tio</option>
				  <option value="Tia">Tia</option>
				  <option value="Abuela">Abuela</option>
				  <option value="Abuelo">Abuelo</option>
				  <option value="Otro">Otro</option>
				  <option value="Ninguno">Ninguno</option>
				</select></td></td>
			</tr>
			
			<tr>
			<td><label>Nivel Academico </label></td>
			<td><select name="nivel1">
				  <option value="<?php echo $modinivel1;?>"><?php echo $modinivel1;?></option>
				  <option value="Primer Ciclo">Primer Ciclo</option> 
				  <option value="Segundo Ciclo">Segundo Ciclo</option>
				  <option value="Tercer ciclo">Tercer ciclo</option>
				  <option value="Bachillerato incompleto">Bachillerato incompleto</option>
				  <option value="Bachillerato completo">Bachillerato completo</option>
				  <option value="Universidad completa">Universidad completa</option>
				  <option value="Universidad Incompleta">Universidad Incompleta</option>
				  <option value="Tecnico completo">Tecnico completo</option>
				  <option value="Tecnico Incompleto">Tecnico Incompleto</option>
				  <option value="Master">Master</option>
				  <option value="No Lee/escribe">No Lee/escribe</option>
				</select></td>
			
			<td><label>Nivel Academico </label></td>
			<td><select name="nivel2">
				  <option value="<?php echo $modinivel2;?>"><?php echo $modinivel2;?></option>
				  <option value="Primer Ciclo">Primer Ciclo</option> 
				  <option value="Segundo Ciclo">Segundo Ciclo</option>
				  <option value="Tercer ciclo">Tercer ciclo</option>
				  <option value="Bachillerato incompleto">Bachillerato incompleto</option>
				  <option value="Bachillerato completo">Bachillerato completo</option>
				  <option value="Universidad completa">Universidad completa</option>
				  <option value="Universidad Incompleta">Universidad Incompleta</option>
				  <option value="Tecnico Incompleto">Tecnico completo</option>
				  <option value="tecin1">Tecnico Incompleto</option>
				  <option value="Master">Master</option>
				  <option value="No Lee/escribe">No Lee/escribe</option>
				  <option value="Ninguno">Ninguno</option>
				</select></td>
			</tr>
			
			<tr>
			<td><label>Ocupacion </label></td>
			<td><select name="ocupacion1">
				  <option value="<?php echo $modiocupacion1;?>"><?php echo $modiocupacion1;?></option>
				  <option value="Jornalero">Jornalero</option> 
				  <option value="Agricultor">Agricultor</option>
				  <option value="Ama de casa">Ama de casa</option>
				  <option value="Empleado">Empleado</option>
				  <option value="Negocio Propio">Negocio Propio</option>
				  <option value="Otros">Otros</option>
				</select></td>
			
			<td><label>Ocupacion </label></td>
			<td><select name="ocupacion2">
				  <option value="<?php echo $modiocupacion2;?>"><?php echo $modiocupacion2;?></option>
				  <option value="Jornalero">Jornalero</option> 
				  <option value="Agricultor">Agricultor</option>
				  <option value="Ama de casa">Ama de casa</option>
				  <option value="Empleado">Empleado</option>
				  <option value="Negocio Propio">Negocio Propio</option>
				  <option value="Otros">Otros</option>
				  <option value="Ninguno">Ninguno</option>
				</select></td>
			</tr>
			
			<tr><td><label>Direcci&oacute;n</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->modselectdetabla("vivienda","direccion","idvivienda",$modiidvivienda);
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
				$b=$_POST["infa"];
				$c=$_POST["childh"];
				$d=$_POST["adoles"];
				$e=$_POST["adult"];
				$f=$_POST["midd"];
				$g=$_POST["old"];
				$h=$_POST["total2"];
				$i=$_POST["mujer"];
				$j=$_POST["hombre"];
				$k=$_POST["total3"];
				$l=@$_POST["jefe1"];
				$m=@$_POST["nivel1"];
				$n=@$_POST["ocupacion1"];
				$o=@$_POST["jefe2"];
				$p=@$_POST["nivel2"];
				$q=@$_POST["ocupacion2"];
				$rr=$_POST["idvivienda"];
				
				
				$mov=new acciones();
				$ms= $mov->Modificar("persona","infancy='$b',childhood='$c',adolescense='$d',adulthood='$e',middleage='$f',oldage='$g',total2='$h',mujeres='$i',hombres='$j',total3='$k',jefe1='$l',nivelacademico1='$m',ocupacion1='$n',jefe2='$o',nivelacademico2='$p',ocupacion2='$q',idvivienda='$rr'","idpersona='$a'");
				
	}	?>
							
			<footer id="footer" align="center">		
			<br>
			<a href='../libreria/licencia.txt' target="_blank">
			Licencia P&uacute;blica General GNU publicada 
			por Fundaci&oacute;n para el Software Libre
			<br>SIREOM&#174;</a>			
			</footer>
    </body>
</html>