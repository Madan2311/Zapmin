<div class="row">
	<div class="col-sm-12">
		<table class="table table-hover table-condensed table-bordered">    
            <div class="container">
		        <div class="form__top">
			        <h2>Agregar <span>Abonos</span></h2>
		        </div>		
		        <form class="form__reg" action="">
                    <input class="input" type="text" placeholder="Id cliente" required autofocus>
                    <input class="input" type="email" placeholder="Abono" required>
                    <input class="input" type="text" placeholder="Valor anterior" required>
                    <input class="input" type="text" placeholder="Fecha del abono" required>
                    <div class="btn__form">
                        <input class="btn__submit btn btn-dark btn-lg active" type="submit" value="Agregar">
                        <a href="{{url('/cliente')}}" class="btn__reset btn btn-info btn-lg active">Volver</a>
                    </div>
		        </form>
	        </div>
		</table>
	</div>
</div>