<?php
@session_start();
$UserName = $_SESSION["USERNAME"];
$UserLevel = $_SESSION["U_NIVEL"];
?>
<p class="title">Portada &raquo; Listado de clientes</p>
<table>
<caption>CUENTAS ABIERTAS</caption>
<thead>
	<tr>
		<th>CLIENTE</th>
		<th>CARGOS</th>
		<th></th>
	</tr>
</thead>
<tbody>
	<?php
	require_once("include/php/sys_db.class.php");
	require_once("include/conf/Config_con.php");
	$db = new DB(DB_DATABASE, DB_HOST, DB_USER, DB_PASSWORD);
	if( $UserLevel == 0 ){
		$cobrador = "";
	} else {
		$cobrador = "AND c_cobrador = '$UserName'";
	}	
	$sql = "SELECT clientes.id, clientes.nombre, clientes.apellidop, 
					clientes.apellidom, clientes.c_cobrador, cuentas.cantidad 
					FROM clientes, cuentas 
					WHERE clientes.id = cuentas.cliente 
					$cobrador
					AND cuentas.estado = 0 
					ORDER BY clientes.id ASC";
	$res = $db->query($sql);
	$num_rows = mysql_num_rows($res);
	while($r = $db->fetchNextObject($res)){
		?>
		<tr>
			<td style="text-align:center"> <?= $i;?></td>
			<td style="text-align:center"> <?= $r->id;?></td>
			<td style="text-align:center"><?= $r->nombre . " ". $r->apellidop ." " .$r->apellidom;?></td>
			<td style="text-align:center">$ <?= $r->cantidad;?></td>
			<td width="80"><a href="?pg=2e&cl=<?= $r->id;?>" class="tboton sombra esqRedondas cuenta">Cuenta</a></td>
		</tr>
		<?php
	}
	?>
</tbody>
<tfoot>
	<tr>
		<th colspan="4"></th>
	</tr>
</tfoot>
</table>
