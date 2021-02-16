@include('header')

<div class="container" style="margin-top: 160px;">
	<div class="entradasAutor col-sm-12">
		<div id="contenedorSugerencia">
			<h4 class="text-center">
				<b>Enviar Mail</b>
			</h4>
			<div class="entradasAutor text-center">
				<form method="POST" action="{{ url('sugerencia') }}">
					<p>
						Nombre: <input type="text" name="nombre">
					</p>
					<p>
						Email: <input type="text" name="email">
					</p>
					<p>
						Asunto: <input type="text" name="asunto">
					</p>
					<p>Mensaje:</p>
					<textarea rows="5" cols="50" name="mensaje"></textarea>
					<br>
					<br> {{ csrf_field() }} <input class="btn btn-success"
						type="submit" name="enviar" value="Enviar">
				</form>
			</div>
		</div>
	</div>
</div>

@include('footer')