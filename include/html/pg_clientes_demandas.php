<p class="title">Portada &raquo; Listado de Clientes en Demanda</p>
<table>
<caption>CUENTAS EN PROCESO DE DEMANDA</caption>
<thead>
	<tr>
		<th>ID</th>
		<th>CLIENTE</th>
		<th colspan="2">ACCIONES</th>
	</tr>
</thead>
<tbody>
	<?php
    	$fecha = date("Y-m-d");
	require_once("include/php/sys_db.class.php");
	require_once("include/conf/Config_con.php");
	$db = new DB(DB_DATABASE, DB_HOST, DB_USER, DB_PASSWORD);
	$sql = "SELECT clientes.id, clientes.nombre, clientes.apellidop, clientes.apellidop, demandas.cliente_id AS id 
            FROM clientes, demandas
            WHERE
                clientes.id = demandas.cliente_id
            ORDER BY clientes.nombre ASC";
	$res = $db->query($sql);
	$num_rows = mysql_num_rows($res);
	while($r = $db->fetchNextObject($res)){
	?>
		<tr>
			<td style="text-align:center"> <?php echo $r->id;?></td>	
			<td style="text-align:center"><?php echo $r->nombre ." ". $r->apellidop ." " .$r->apellidom;?></td>
			<td width="80"><a href="?pg=2e&cl=<?php echo $r->id;?>" class="tboton sombra esqRedondas cuenta">Cuenta</a></td>
			<!--
<td width="80"><a href="include/php/sys_modelo.php?cte=<?echo $r->id;?>&cta=<?echo $r->cuenta;?>&action=recargo_elimina" class="tboton sombra esqRedondas recargos">Elimina</a></td>
-->

		</tr>
		<?php
	}
	?>
</tbody>
<tfoot>
	<tr>
		<th colspan="5">
			</th>
	</tr>
</tfoot>
</table>
