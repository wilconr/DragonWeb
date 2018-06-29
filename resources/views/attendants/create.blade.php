@extends('layouts.app')

@section('title')
	Crear Acudiente
@endsection	

@section('content')

	{!! Form::open(['class' =>'col s12', 'route' => 'attendants.store', 'method' => 'POST']) !!}

		<div class="card-panel">

			<div class="row">
				<div class="col s12">
					<a href="/attendants"><i class="material-icons left black-text">keyboard_backspace</i></a>
					<h4 class="card-title grey-text text-darken-4 center-align">Crear Acudiente</h4>
				</div>
			</div>

			<div class="row">
			    <div class="input-field col s6">
			      {!! Form::label('nick_name', 'Nick Name') !!}
			      {!! Form::text('nick_name', old('nick_name'), ['class' => 'validate text-capitalize']) !!}
			    </div>
			</div> 

			@include('attendants._form')

			<button class="btn waves-effect waves-light black" type="submit" name="action">Crear<i class="material-icons right">send</i></button>	

		</div>
	
	{!! Form::close() !!}

@endsection
