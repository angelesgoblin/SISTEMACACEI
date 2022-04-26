<?php
//include("Databaseseeder.php");//CONEXION A LA BASE DE DATOS
//$sql = "SELECT * from docsistemas"; //ABRI LA TABLA CLIENTE
//$rs = mysql_query($sql, $cn);
?>
 
<!DOCTYPE html>
<html>
<head>
</head>
 
 
<!--INICIO DE CODIGO PHP PRINCIPAL-->
<?php
$var="";
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];
	if($btn=="Buscar"){
 
$sql="SELECT * FROM docsistemas WHERE Estatus = '$bus'";//CONSULTA LA TABLA CLIENTE
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[6];
			$var1=$resul[4];
			$var2=$resul[3];
			$var6=$resul[5];
			$var3=$resul[1];
			$var4=$resul[0];
			$var5=$resul[2];
			}
 
		}
 
	}
 
?>
<!--FIN DE CODIGO PHP PRINCIPAL-->
<form name="fe" id="f1" action="" method="post">
<center>
<table width="391" border="2" bgcolor="#99CCFF">
<tr>
<td width="379"><div align="center"><strong>ACTUALIZAR  MATERIAS ESCOLARES</strong></div></td>
</tr></table>
 
<table width="390" border="2">
  <tr>
    <td width="206" class="Estilo4">Cliente</td>
    <td width="99"><select name="txtbus" id="txtbus" >
      <option value="">Seleccione</option>
      <? if(mysql_num_rows($rs)>0)
{
while($row = mysql_fetch_assoc($rs))
{
?>
      <option value="<?=$row["C_id_asignatura"]?>">//CONSULTA EL NOMBRE DEL CLIENTE
        <?=$row["C_id_asignatura"]?>
        </option>
      <?
}
}
?>
    </select></td>
    <td width="61"><input type="submit" name="btn1"  value="Buscar" onClick="asdf(3)" /></td>
  </tr>
</table>
</center>
<br />
<hr>
</form>
<?php
echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
<td>$var4</td>
<td>$var5</td>
<td>$var6</td>
</tr>";
 
?>
</body>
</html>