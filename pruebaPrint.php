<?php
if($_POST["imprime"]){
$handle=printer_open("Generic / Text Only");

printer_start_doc($handle, "Recibo");
printer_start_page($handle);
$font = printer_create_font("Segoe Print",40,23,400,false,false,false,0);
printer_select_font($handle, $font);

printer_draw_text($handle," ",0,200);
printer_draw_text($handle,"Fecha:".date("Y-m-d"),0,200);
printer_draw_text($handle,"Hora: ".date("H:i:s"),0,300);
printer_draw_text($handle,"Cliente:",0,500);
printer_draw_text($handle,"1 : Jesús Alfonso Nuñez Valdez",0,600);
printer_draw_text($handle,"Piezas Totales: ",0,700);
printer_draw_text($handle,"18",800,700);
printer_draw_text($handle,"CARGO:",50,800);
printer_draw_text($handle,"Subtotal: ",100,900);
printer_draw_text($handle,"$ ".$subtotal,1000,900);
printer_draw_text($handle,"IVA: ",100,1000);
printer_draw_text($handle,"$ ".$iva,1000,1000);
printer_draw_text($handle,"Total: ",100,1100);
printer_draw_text($handle,"$ ".$total,1000,1100);
printer_draw_text($handle,$pagado,100,1200);
printer_draw_text($handle," ",0,1300);

printer_delete_font($font);
printer_end_page($handle);
printer_end_doc($handle);
printer_abort($handle);
printer_close($handle);
}else{
?>
	<html>
	<head>
	</head>
	<body>
	<form action="" method="post">
		<input type="submit" name="imprime" value="Imprimir" />
	</form>
	</body>
	</html>
	<?php 
} ?>