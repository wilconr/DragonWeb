@extends('layouts.app')

@section('title')
	Editar Cinturon - {{$belt->color}}
@endsection	

@section('content')
	
	{!! Form::model($belt, ['class' =>'col s12', 'route' => ['belts.update', $belt], 'method' => 'PUT', 'files' => true]) !!}

		<div class="card-panel">

			<div class="row">
				<div class="col s12">
					<a href="/belts/{{$belt->color}}"><i class="material-icons left black-text">keyboard_backspace</i></a>
					<h4 class="card-title grey-text text-darken-4 center-align">Editar Cinturon</h4>
				</div>
			</div>

			@include('belts._form')

			<button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Actualizar<i class="material-icons right">send</i></button>	

		</div>
	
	{!! Form::close() !!}

@endsection
