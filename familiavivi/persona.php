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
				$l=$_POST["jefe1"];
				$m=$_POST["nivel1"];
				$n=$_POST["ocupacion1"];
				$o=$_POST["jefe2"];
				$p=$_POST["nivel2"];
				$q=$_POST["ocupacion2"];
				$r=$_POST["idvivienda"];
				
				$mov=new acciones();
				$ms= $mov->guardar("persona","idpersona,infancy,childhood,adolescense,adulthood,middleage,oldage,total2,mujeres,hombres,total3,jefe1,nivelacademico1,ocupacion1,jefe2,nivelacademico2,ocupacion2,idvivienda","'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r'");
				}
            }
        ?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../libreria/styles.css">
		<link rel="shortcut icon" href="../libreria/images/ico.png" type="image/png">

   </head>

<body>
<div id="todo">
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
	<section>
            <div id='infoprin'>   			
                
              <form id="formulario" method='POST'>
		<nav id="menu2">
                    <table id="otromenu">
			<td><input type=image src="../libreria/images/forms.png" id="nuevo" name="nuevo" value="modificar" title="Modificar" onclick="location.href='modificarpe.php';"></td>
			<td><input type=image src='../libreria/images/save.png' id="nuevo" name="nuevo" value="guardar" title="Guardar"></td>
			<td><input type=image src='../libreria/images/printer.png' id="nuevo" name="nuevo" value="imprimir" title="Imprimir" onclick="location.href='../impresion/ivivienda.php';"></td>
			<td><input type=image src='../libreria/images/info.png' id="nuevo" name="nuevo" value="ayuda" title="Ayuda" onclick="window.open (href='../libreria/ManualUsuario.pdf')"></td></tr>				
                    </table>
		</nav>
		<fieldset>
                <legend>
                Datos de los Miembros de la Familia
                </legend>
                 <table id="tabla">
                     
            <tr><td><label>Codigo:</label></td>
			<td><input type="text" size="4" name="codigo" id="codigo" value="<?php echo newid("persona","idpersona"); ?>" readonly ></td></tr>
			
			<tr><td></td><td colspan="2"><label> Cantidad de Miembros con la edad de:</label></td>
			
			<tr>
			<td><label>0-4 a&ntilde;os</label></td>
			<td><input type="text" size="4" name="infa" value="" title='Digite cantidad' required="required"  onchange="total2.value=parseInt(infa.value)+parseInt(childh.value)+parseInt(adoles.value)+parseInt(adult.value)+parseInt(midd.value)+parseInt(old.value);"></td>
            
			<td><label>5-12</label></td>
			<td><input type="text" size="4" name="childh" value="" title='Digite cantidad' required="required" onchange="total2.value=parseInt(infa.value)+parseInt(childh.value)+parseInt(adoles.value)+parseInt(adult.value)+parseInt(midd.value)+parseInt(old.value);"></td>
            
			<td><label>13-17</label></td>
			<td><input type="text" size="4" name="adoles" value="" title='Digite cantidad' required="required" onchange="total2.value=parseInt(infa.value)+parseInt(childh.value)+parseInt(adoles.value)+parseInt(adult.value)+parseInt(midd.value)+parseInt(old.value);"></td>
			</tr>
            
			<tr>
			<td><label>18-30</label></td>
			<td><input type="text" size="4" name="adult" value="" title='Digite cantidad' required="required" onchange="total2.value=parseInt(infa.value)+parseInt(childh.value)+parseInt(adoles.value)+parseInt(adult.value)+parseInt(midd.value)+parseInt(old.value);"></td>
            
			<td><label>31-60</label></td>
			<td><input type="text" size="4" name="midd" value="" title='Digite cantidad' required="required" onchange="total2.value=parseInt(infa.value)+parseInt(childh.value)+parseInt(adoles.value)+parseInt(adult.value)+parseInt(midd.value)+parseInt(old.value);"></td>
            
			<td><label>Mayor a 60</label></td>
			<td><input type="text" size="4" name="old" value="" title='Digite cantidad' required="required" onchange="total2.value=parseInt(infa.value)+parseInt(childh.value)+parseInt(adoles.value)+parseInt(adult.value)+parseInt(midd.value)+parseInt(old.value);"></td>
            
			<tr>
			<td></td><td><label>Total</label></td></tr>
			<td></td><td><input type="text" size="4" name="total2" value="" title='Digite cantidad' required="required"></td>
			
			
			<tr>
			<td><label>Mujeres</label></td>
			<td><input type="text" size="4" name="mujer" value="" title='Digite cantidad' required="required" onchange="total3.value=parseInt(mujer.value)+parseInt(hombre.value);"></td>
			
			<td><label>Hombres</label></td>
			<td><input type="text" size="4" name="hombre" value="" title='Digite cantidad' required="required" onchange="total3.value=parseInt(mujer.value)+parseInt(hombre.value);"></td>
			</tr>
			
			<tr>
			<td></td><td><label>Total</label></td></tr>
			<td></td><td><input type="text" size="4" name="total3" value="" title='Digite cantidad' required="required"></td>
			
			
            <tr><td></td><td colspan="2"><label>Responsable de la Familia</label></td></tr>
			
			<tr>
			<td><label>Jefe de Familia</label></td>
			<td><select name="jefe1">
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
				  <option value="Jornalero">Jornalero</option> 
				  <option value="Agricultor">Agricultor</option>
				  <option value="Ama de casa">Ama de casa</option>
				  <option value="Empleado">Empleado</option>
				  <option value="Negocio Propio">Negocio Propio</option>
				  <option value="Otros">Otros</option>
				</select></td>
			
			<td><label>Ocupacion </label></td>
			<td><select name="ocupacion2">
				  <option value="Jornalero">Jornalero</option> 
				  <option value="Agricultor">Agricultor</option>
				  <option value="Ama de casa">Ama de casa</option>
				  <option value="Empleado">Empleado</option>
				  <option value="Negocio Propio">Negocio Propio</option>
				  <option value="Otros">Otros</option>
				  <option value="Ninguno">Ninguno</option>
				</select></td>
			</tr>
			
			<tr><td><label>Vivienda</label></td>
			 <td><?php 
			 $b=new consultas();
			 echo $b->selectdetabla("vivienda","direccion","idvivienda");
			     ?></td></tr>
			
						</table> 
					</fieldset>			 
				</form>		
				                                
			<?php if ($ms!='') echo " <script>alert('$ms');</script>"; ?>

						<section>
						<div id="formulario2">
						<fieldset>
						
						<form action="persona.php" method="get">
						<table>
						<tr><td><b>Busquedad seg&uacute;n Codigo:</b></td><td><input type="text" name="bu" size="4" title="Digite Codigo"></td>
						<td><input type=image src="../libreria/images/vacancy.png" name="bu1"  id="bu1" value="buscar" title="Buscar"></td></tr>	
						<tr><td>

			<?php

			if (isset($_GET['bu']))
			{  //para buscar
				$ii=$_GET['bu'];
				
				$b=new consultas();
				echo $b->buscarvalor("persona","idpersona","idpersona='$ii'");

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

			echo $con->consultar("persona,vivienda","idpersona as'Codigo',infancy as '0-4 a&ntilde;os',childhood as'5-12 a&ntilde;os',adolescense as'13-17 a&ntilde;os',adulthood as '18-30 a&ntilde;os',middleage as'31-60 a&ntilde;os',oldage as 'Mayor 61 a&ntilde;os',mujeres as 'Mujeres',hombres as 'Hombres',jefe1 as 'Jefe de Familia ',ocupacion1 as 'Ocupaci&oacute;n',nivelacademico1 as 'Nivel Academico',jefe2 as 'Jefe de Familia 2',ocupacion2 as 'Ocupaci&oacute;n',nivelacademico2 as 'Nivel Academico',vivienda.direccion as 'Direcci&oacute;n'","vivienda.idvivienda=persona.idvivienda order by persona.idpersona desc limit 5");
								
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