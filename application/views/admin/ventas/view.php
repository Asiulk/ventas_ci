
<div class="row">
	<div class="col-xs-12 text-center">
		<b>Team Carepa</b><br>
		Cra 80 # 81 -42 <br>
		Tel. 313 517 0192 <br>
		Email:csateamcarepa@gmail.com
	</div>
</div> <br>
<div class="row">
	<div class="col-xs-6">
		<b>CLIENTE</b><br>
		<b>Nombre:</b> <?php echo $venta->nombre;?> <br>
		<b>Nro Documento:</b> <?php echo $venta->documento;?><br>
		<b>Telefono:</b> <?php echo $venta->telefono;?> <br>
		<b>Direccion</b> <?php echo $venta->direccion;?><br>
	</div>
	<div class="col-xs-6">
		<b>COMPROBANTE</b> <br>
		<b>Tipo de Comprobante:</b> <?php echo $venta->tipocomprobante;?><br>
		<b>Serie:</b> <?php echo $venta->serie;?><br>
		<b>Nro de Comprobante:</b><?php echo $venta->num_documento;?><br>
		<b>Fecha</b> <?php echo $venta->fecha;?>
	</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Valor U</th>
					<th>Cantidad</th>
					<th>Valor</th>
					<th>IVA</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($detalles as $detalle):?>
				<tr>
					<td><?php echo $detalle->codigo;?></td>
					<td><?php echo $detalle->nombre;?></td>
					<td><?php echo $detalle->precio;?></td>
					<td><?php echo $detalle->cantidad;?></td>

					<td><?php echo $detalle->precio*$detalle->cantidad;?></td>
					<?php //aqui toca la condicion ?>

					<td><?php echo ($detalle->precio*$detalle->cantidad)*($detalle->igv/100);?></td>

					<td><?php echo $detalle->importe;?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="6" class="text-right"><strong>Subtotal:</strong></td>
					<td><?php echo $venta->subtotal;?></td>
				</tr>
				<tr>
					<td colspan="6" class="text-right"><strong>IVA:</strong></td>
					<td><?php echo $venta->igv;?></td>
				</tr>
				<tr>
					<td colspan="6" class="text-right"><strong>Descuento:</strong></td>
					<td><?php echo $venta->descuento;?></td>
				</tr>
				<tr>
					<td colspan="6" class="text-right"><strong>Total:</strong></td>
					<td><?php echo $venta->total;?></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
