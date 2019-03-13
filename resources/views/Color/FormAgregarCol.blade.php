<div class="row">
	<div class="col-sm-12">
		<table class="table table-hover table-condensed table-bordered">    
            <div class="container">
		        <div class="form__top">
			        <h2>Agregar <span>Color</span></h2>
		        </div>		
		        <form class="form__reg" action="">
                    <input class="input" type="text" placeholder="Nro_Pedido" required autofocus>
                    <input class="input" type="email" placeholder="Cod_Cliente" required>
                    <input class="input" type="text" placeholder="Cod_Pago" required>
                    <input class="input" type="text" placeholder="Cantidad" required>
                    <input class="input" type="text" placeholder="Fecha_tentativa" required>
                    <div class="btn__form">
                        <input class="btn__submit btn btn-dark btn-lg active" type="submit" value="Agregar">
                        <a href="{{url('/Color')}}" class="btn__reset btn btn-info btn-lg active">Volver</a>
                    </div>
		        </form>
	        </div>
		</table>
	</div>
</div>