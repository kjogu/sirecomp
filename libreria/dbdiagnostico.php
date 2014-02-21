<?php
class dbdiagnostico
{
      public $server="localhost";
      public $base="diagnostico";
      public $dbuser="root";
      public $cn;
	  public $c="";
      public function __construct()
	  {  
  		  $this->cn=$this->conectar();
	  
	  }
      public function conectar()
	  {
		$cnx=mysql_connect($this->server,$this->dbuser,$this->c) or die (mysql_error());
		mysql_select_db($this->base,$cnx);
		return $cnx;
      }
	public function consulta($consulta)
	  {
		$datos=mysql_query($consulta,$this->cn) or die(mysql_error());
		return $datos;
      }
	  
}
//CLASE CONSULTAS... REALIZA CONSULTAS DEVOLVIENDO RESULTADOS

class consultas extends dbdiagnostico
{  //clase para consultas de diverso tipo
   public $datos; 
   public function buscarvalor($tabla,$campo,$condicion) //devuelve 0 ó el dato encontrado
   {
   		$db=new dbdiagnostico();
		$this->datos=$db->consulta("select $campo from $tabla where $condicion");
		if (mysql_num_rows($this->datos)>0)
		{
			$r=mysql_result($this->datos,0,$campo);
		}
		else
		{
			$r=0;
		}
   		return $r;
		
   }
   
   
    public function selectdetablass($tabla,$campo,$clave) //devuelve 0 ó el dato encontrado
   {
   		$db=new dbdiagnostico();
		$this->datos=$db->consulta("select $campo,$clave from $tabla");
		$sele="<select name='$clave'><option value=0>Ninguno</option>";
		for ($i=0;$i<mysql_num_rows($this->datos);$i++)
		{   $id= mysql_result($this->datos,$i,$clave);
		    $sele.="<option value='$id'>";
			$sele.=mysql_result($this->datos,$i,$campo);
			$sele.="</option>";
			
		} 
		 $sele.="</select>";
   		return $sele;
		
   }
   
   	//SELECCIONA LO QUE ESTA EN OTRA TABLA
	
 public function selectdetabla($tabla,$campo,$clave) //devuelve 0 ó el dato encontrado
   {
   		$db=new dbdiagnostico();
		$this->datos=$db->consulta("select $campo,$clave from $tabla");
		$sele="<select name='$clave'>";
		for ($i=0;$i<mysql_num_rows($this->datos);$i++)
		{   $id= mysql_result($this->datos,$i,$clave);
		    $sele.="<option value='$id'>";
			$sele.=mysql_result($this->datos,$i,$campo);
			$sele.="</option>";
		} 
		 $sele.="</select>";
   		return $sele;
   }
    public function modselectdetabla($tabla,$campo,$clave,$id) //devuelve 0 ó el dato encontrado
   {
   		$db=new dbdiagnostico();
		$this->datos=$db->consulta("select $campo,$clave from $tabla");
		
		$b1=new consultas();
		$modi=$b1->buscarvalor("$tabla","$campo","$clave='$id'");
		
		
		$sele="<select name='$clave'><option value='$id'>$modi</option>";
		for ($i=0;$i<mysql_num_rows($this->datos);$i++)
		{   $id= mysql_result($this->datos,$i,$clave);
		    $sele.="<option value='$id'>";
			$sele.=mysql_result($this->datos,$i,$campo);
			$sele.="</option>";
		}
		 $sele.="</select>";
   		return $sele;
   }
   public function consultar($tabla,$campos,$condicion,$estilo="cellspacing=0; cellpadding=1; font-size:12px; width:80%; margin-left:auto; margin-right:auto; text-align:center; border-radius:7px;") 
      { //devuelve una tabla html con los datos encontrados.
   		$db=new dbdiagnostico();
		$this->datos=$db->consulta("select $campos from $tabla where $condicion");
		if (mysql_num_rows($this->datos)>0)
		{
			 
			$resul="<table border=1px; cellpadding=1px; cellspacing=0px; style=\"$estilo\"> <tr style=\"$estilo\">";	
			for ($camp=0;$camp<mysql_num_fields($this->datos); $camp++)
			{
				$resul.="<th>". mysql_field_name($this->datos,$camp);
			}
			$resul.="</tr>";
			//Extraer los datos:	
			for($f=0;$f<mysql_num_rows($this->datos);$f++)
			{
				$resul.="<tr>";
				for ($camp=0;$camp<mysql_num_fields($this->datos); $camp++)
				{
					$resul.="<td>".mysql_result($this->datos,$f,$camp);
				}	
				$resul.="</tr>";
			}
			$resul.="<br></table>";
			 
		}
		else
		{
			//$resul="No hay datos en $tabla Segun: $condicion";
			$resul="<b>No hay datos en la tabla</b>";
		}
   		return $resul;
   }
   public function consultared($tabla,$campos,$condicion,$a) 
      { //devuelve una tabla html con los datos encontrados.
   		$db=new dbdiagnostico();
		$this->datos=$db->consulta("select $campos from $tabla where $condicion");
		if (mysql_num_rows($this->datos)>0)
		{
			 
			$resul="<table border='1' celspacing='0' cellpadding='0'><tr>";	
			for ($camp=0;$camp<mysql_num_fields($this->datos); $camp++)
			{
				$resul.="<th>". mysql_field_name($this->datos,$camp);
			}
			$resul.="<th>modificar<th>Borrar</tr>";
			//Extraer los datos:	
			for($f=0;$f<mysql_num_rows($this->datos);$f++)
			{
				$resul.="<tr>";
				for ($camp=0;$camp<mysql_num_fields($this->datos); $camp++)
				{
					$resul.="<td>".mysql_result($this->datos,$f,$camp);
					
				}	
				$resul.="<td><a href='$a?id=".mysql_result($this->datos,$f,0)."'>  Modificar</a>";
				$resul.="<td><a href='$a?idb=".mysql_result($this->datos,$f,0)."'> Borrar</a>";
				$resul.="</tr>";
			}
			$resul.="</table>";
			 
		}
		else
		{
			$resul="<b>No hay datos en $tabla Segun: $condicion</b>";
		}
   		return $resul;
   }
    
 }  

class acciones extends dbdiagnostico
{  //clase para consultas de accion
   public $r;  
   public function guardar($tabla,$campos,$valores) //guarda valores
   {
   		$db=new dbdiagnostico();
		//echo "insert into $tabla($campos) values($valores)";
		$rx=$db->consulta("insert into $tabla($campos) values($valores)");
		if ($rx)
		  {  $r="Datos guardados";
		  }
		  else
		  {
		     $r="<b>No se guardo</b>";
		  }
   		return $r;
   }
   public function Modificar($tabla,$valores,$cond) //guarda valores
   {
   		$db=new dbdiagnostico();
		$rx=$db->consulta("update $tabla set $valores where $cond");
		if ($rx)
		  {  $r="<b>Datos actualizados</b>";
		  }
		  else
		  {
		     $r="<b>No se Actualizo</b>";
		  }
   		return $r;
   }
   public function borrar($tabla,$condicion) //borra valores
   {
   		$db=new dbdiagnostico();
		$rx=$db->consulta("delete from $tabla where $condicion");
		if ($rx)
		  {  
		  	$r="<b>Datos borrados</b>";
		  }
		  else
		  {
		     $r="0";
		  }
   		return $r;
   }   
 }
function newid($tabla,$campo)
{
	$b=new consultas();
	$x=$b->buscarvalor("$tabla","max($campo)"," 1 ");		
	$x++;
	return $x;

}
function usuario()
{
    @session_start();
	if ($_SESSION["nusuario"]!="0" )
	{
	   $a=$_SESSION["nusuario"] . "(".$_SESSION["tusuario"] .")";
	}
	else
	{
	   @header("location:/sidicom/index.php"); 
	}
    return $a;
}
?>
