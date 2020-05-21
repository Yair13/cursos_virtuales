@extends('layouts.home')


@section('content')
<br>
<br>
<h3 style="text-align: center"><b>Listado de aspirantes</b></h3>

<br>
<br>
<div class="col-md-3"></div>

<div class="col-md-6">


    <div class="row">
        {!! Form::open(['route' => ['registro_estudiantes.list_aspirantes_filtr'], 'method' => 'GET', 'id' => 'form_list_aspirantes_filtr' ]) !!}
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="form-group">
                <label for="nombres">Nombres</label> 
                {{ Form::text('nombres', null, ['class' => 'form-control ', 'id' => 'nombres', 'name' => 'nombres']) }}
                </div>
           </div>
           <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="form-group">
                <label for="email">email</label> 
                {{ Form::text('email', null, ['class' => 'form-control ', 'id' => 'email', 'name' => 'email']) }}
                </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="form-group">
            <label for="programa">Programa</label> 
            {{ Form::select('programa', $g_programas, null, ['class'=>'form-control', 'placeholder'=>'Seleccione ...', 'id' => 'programa']) }}
            </div>
           </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="form-group">
                    <button type="submit" style="margin: 20px;  width: 100%;" class="btn btn-primary" id="Edit">Filtro</button>
                  </div>
            </div> 
        {!! Form::close() !!}
    
    </div>  

    <br><br>
    <input type="hidden" id="toquen" value="{{ csrf_token() }}">
    <table class="table table-responsive table-bordered">
        <thead>
            <tr style="    background: #222222;color: white;">
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Programa</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($array_aspirantes as $aspirante)
            <tr>
              <td>{{ $aspirante->nombres }}</td>
              <td>{{ $aspirante->apellidos }}</td>
              <td>{{ $aspirante->email }}</td>
              <td>{{ $aspirante->telefono }}</td>
              <td>{{ $aspirante->Nprograma }}</td>

              @if ($aspirante->estado=='1')
                <td value="{{ $aspirante->id }}" ><button onclick="actualizar({{ $aspirante->id }})" class="btn btn-success" id="Pendiente{{ $aspirante->id }}">Pendiente</a></td>
              @else
              <td value="{{ $aspirante->id }}" ><button onclick="actualizar({{ $aspirante->id }})" class="btn btn-success" disabled >Llamado</a></td>
              @endif
              <input class="form-control" type="hidden" name="ruta_acutaliza{{ $aspirante->id }}"  id="ruta_acutaliza{{ $aspirante->id }}" value='{{ route("registro_estudiantes.update", $aspirante->id) }}'>
            </tr>
            @endforeach
    </table>

</div>

  <script src="{{ asset('js/registro_estudiantes/actualizar.js') }}" defer></script>


@endsection
