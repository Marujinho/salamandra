@extends('../menu')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-3">
					<h1>Modificar Menu</h1>	
					<hr>
					@foreach($bebidas as $bebida)

					
					<form method="post" action="editar/{{$bebida->id}}">
					<h3>{{ $bebida->name }} -
					{{csrf_field()}}
					{{method_field('PUT')}} 
						<input type="text" name="price" value="{{ $bebida->price }}"> 

						<input type="submit" class="btn btn-info" value="Alterar preço">

					</form>
					<form method="post" action="deletar/{{$bebida->id}}">
						{{csrf_field()}}
						{{method_field('DELETE')}} 
						<input type="submit" class="btn btn-danger" value="Apagar">
					</form>	
					</h3>

					

					@endforeach
					<br>
					<a href="../menu"><button class="btn btn-success">Voltar ao menu</button></a>
			</div>
		</div>
	</div>
@endsection('content')
