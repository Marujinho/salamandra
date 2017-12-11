@extends('menu')


@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>Bem vindo ao seu menu</h1>	
				<hr>
				@foreach($bebidas as $bebida)

				<h3>{{ $bebida->name }} - {{ $bebida->price }}</h3><br>

				@endforeach

				<a href="{{ route('avada.kabunda') }}"><button class="btn btn-info">Adicionar bebida ao menu</button></a>
				<a href="menu/editarMenu"><button class="btn btn-warning">Alterar Itens</button></a>
			</div>
		</div>
	</div>

@endsection('content')