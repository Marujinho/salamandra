@extends('../menu')
@section('title')
	Cadastro de bebidas
@endsection('title')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>Cadastro de bebidas</h1>
				<br>
				<form method="post" action="criar">
					{{ csrf_field() }}
					{{ method_field('POST') }}
					<div class="form-group">	
						<label for="name">Nome da bebida: </label>	
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">	
						<label for="name">Classificacao: </label>	
						<input type="text" name="classification" class="form-control">
					</div>
					<div class="form-group">	
						<label for="name">Preço: </label>	
						<input type="text" name="price" class="form-control">
					</div>
					<div class="form-group">		
						<input type="submit" class="btn btn-success" value="Cadastrar bebida">
					</div>
				</form>
			</div>
		</div>
	</div>


@endsection