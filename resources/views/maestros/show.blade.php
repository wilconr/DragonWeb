@extends('layouts.app')

@section('title')
	Maestro
@endsection

@section('content')

	<div class="col s12">
	    <div class="card-panel center-align">

	    	<div class="card-content">

	    		<a href="/maestros"><i class="material-icons left black-text">keyboard_backspace</i></a>
	    		
				<a class="dropdown-trigger right" data-target="dropdownOpciones"><i class="material-icons right black-text">more_vert</i></a>

		    	<ul id="dropdownOpciones" class="dropdown-content">
		    		<li>
		    			<a class="black-text d-inline-flex" href="/maestros/{{$maestro->nick_name}}/edit"><i class="material-icons left">edit</i>EDITAR</a>
		    		</li>
		    		<li>

						{!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'route' => ['maestros.destroy', $maestro->nick_name] ]) !!}
							<button class="btn waves-effect waves-light light-blue darken-4 btn-alert" style="height: 50px; padding: 0 31px;" type="submit" name="action">BORRAR<i class="material-icons left">delete</i></button>	
						{!! Form::close() !!}

		    		</li>
		    	</ul>

			</div>
	    	
			<img class="rounded-circle mx-auto img-avatar z-depth-3" src="/images/maestros/{{$maestro->avatar}}" >

			<h3 class="card-title grey-text text-darken-4 text-capitalize">{{$maestro->nombres}} {{$maestro->apellidos}}</h3>
			<h4 class="card-title grey-text text-darken-4">{{$maestro->fecha_nac->age}} Años</h3>
			<h5 class="card-title grey-text text-darken-4 text-capitalize">Cinturon {{$maestro->belt->color}}</h3>

	    </div>
	</div>			

@endsection

@section('scripts')
	@include('maestros._alerts')
@endsection
