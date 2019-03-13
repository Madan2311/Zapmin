<div class="row">
	<div class="col-sm-12">
	<h2 class="text-info">Pedidos</h2>
		<table class="table table-hover table-condensed table-bordered">
		<a href="{{url('/AgregarPedido')}}" class="btn btn-info btn-lg active">Agregar nuevo pedido
		<i class="fa fa-plus"></i></a>
            <br>
            <br>
			<thead class="p-3 mb-2 bg-info text-white">
				<td>Nro_Pedido</td>
				<td>Cod_Cliente</td>
				<td>Cod_Pago</td>
				<td>Cantidad</td>
				<td>Fecha_tentativa</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</thead>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
				<a href="{{url('/EditarPedido')}}" class="btn btn-warning"><i class="fas fa-user-edit"></i></a>
				</td>
				<td>
					<button class="btn btn-danger"><i class="fas fa-times-circle"></i></button>
				</td>
			</tr>
		</table>
	</div>
</div>