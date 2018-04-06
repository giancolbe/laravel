@extends('Layouts.admin')

@section('content')

	@include('alerts/request')

	{!!Form::open(['route' => 'usuario.store', 'method' => 'POST'])!!}
		@include('usuario.forms.usr')
		<div class="form-group">
			{!!Form::label('Contraseña: ')!!}
			{!!Form::password('password',['class' => 'form-control', 'placeholder' => 'Ingrese la contraseña del usuario'])!!}
		</div>
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop 