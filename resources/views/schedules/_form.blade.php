@include('layouts._validation-errors')

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('clase', 'Clase') !!}
      {!! Form::text('clase', old('clase'), ['class' => 'validate text-capitalize']) !!}
    </div>
</div>

<div class="row">
    <div class="col s12">
      {!! Form::label('dia', 'Dias') !!}
    </div>
</div>

<div class="row">
    <div class="checkbox col s12">	
      <label>
      	{!! Form::checkbox('dia[]', 'Lunes', null, ['class' => 'validate']) !!}
      	<span>Lunes</span> 
      </label>
      <label>
      	{!! Form::checkbox('dia[]', 'Martes',null,['class' => 'validate']) !!}
      	<span>Martes</span> 
      </label>
      <label>
      	{!! Form::checkbox('dia[]', 'Miercoles',null,['class' => 'validate']) !!}
      	<span>Miercoles</span> 
      </label>
      <label>
      	{!! Form::checkbox('dia[]', 'Jueves',null,['class' => 'validate']) !!}
      	<span>Jueves</span> 
      </label>
      <label>
      	{!! Form::checkbox('dia[]', 'Viernes',null,['class' => 'validate']) !!}
      	<span>Viernes</span> 
      </label>
      <label>
      	{!! Form::checkbox('dia[]', 'Sabado',null,['class' => 'validate']) !!}
      	<span>Sabado</span> 
      </label>
      <label>
      	{!! Form::checkbox('dia[]', 'Domingo',null,['class' => 'validate']) !!}
      	<span>Domingo</span>     	
      </label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('hora_inicio', 'Hora Inicio') !!}
      {!! Form::text('hora_inicio', old('hora_inicio'), ['class' => 'validate timepicker']) !!}
    </div>
    <div class="input-field col s12">
      {!! Form::label('hora_final', 'Hora Final') !!}
      {!! Form::text('hora_final', old('hora_final'), ['class' => 'validate timepicker']) !!}
    </div>
</div>


