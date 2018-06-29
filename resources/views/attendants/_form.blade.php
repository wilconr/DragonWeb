@include('layouts._validation-errors')

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('nombres', 'Nombres') !!}
      {!! Form::text('nombres', old('nombres'), ['class' => 'validate text-capitalize']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('apellidos', 'Apellidos') !!}
      {!! Form::text('apellidos', old('apellidos'), ['class' => 'validate text-capitalize']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('telefono', 'Telefono') !!}
      {!! Form::text('telefono', old('telefono'), ['class' => 'validate']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('direccion', 'Direccion') !!}
      {!! Form::text('direccion', old('direccion'), ['class' => 'validate text-capitalize']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12 black-text">
        {!! Form::select('student_id', $students->pluck('nombres', 'id'), null, ['placeholder' => 'Elige un Alumn@'], ['class' => 'black-text text-capitalize']) !!} 
        {!! Form::label('student_id', 'Alumn@') !!}
    </div>
</div>