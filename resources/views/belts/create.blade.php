@extends('layouts.app')

@section('title')
	Crear Cinturon
@endsection	

@section('content')

	{!! Form::open(['class' =>'col s12', 'route' => 'belts.store', 'method' => 'POST', 'files' => true]) !!}

		<div class="card-panel">

			<div class="row">
				<div class="col s12">
					<a href="/belts"><i class="material-icons left black-text">keyboard_backspace</i></a>
					<h4 class="card-title grey-text text-darken-4 center-align">Crear Cinturon</h4>
				</div>
			</div>

			@include('belts._form')

			<button class="btn waves-effect waves-light black" type="submit" name="action">Crear<i class="material-icons right">send</i></button>	

		</div>
	
	{!! Form::close() !!}

@endsection
