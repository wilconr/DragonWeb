@extends('layouts.app')

@section('title')
	Horario
@endsection

@section('content')

	<div class="col s12">
	    <div class="card-panel center-align">

	    	<div class="card-content">

	    		<a href="/schedules"><i class="material-icons left black-text">keyboard_backspace</i></a>
	    		
				<a class="dropdown-trigger right" data-target="dropdownOpciones"><i class="material-icons right black-text">more_vert</i></a>

		    	<ul id="dropdownOpciones" class="dropdown-content">
		    		<li>
		    			<a class="black-text d-inline-flex" href="/schedules/{{$schedule->clase}}/edit"><i class="material-icons left">edit</i>Editar</a>
		    		</li>
		    		<li>

						{!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'route' => ['schedules.destroy', $schedule->clase] ]) !!}
							<button class="btn waves-effect waves-light light-blue darken-4 btn-alert" style="height: 50px; padding: 0 31px;" type="submit" name="action">Borrar<i class="material-icons left">delete</i></button>	
						{!! Form::close() !!}

		    		</li>
		    	</ul>

			</div>

			<h3 class="card-title grey-text text-darken-4 text-capitalize"><b>{{$schedule->clase}}</b></h3>

			<h4 class="card-title grey-text text-darken-4 text-capitalize">{{$schedule->dia}}</h4>

			<h5 class="card-title grey-text text-darken-4 text-capitalize">Horario: {{'De ' . date('h:i A',strtotime($schedule->hora_inicio)) . ' Hasta ' . date('h:i A',strtotime($schedule->hora_final))}}</h5>



	    </div>
	</div>			

@endsection

@section('scripts')
	@include('schedules._alerts')
@endsection
