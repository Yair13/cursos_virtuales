@extends('layouts.app')


@section('content')
<div class="container-fluid" style="text-align: center">
	<section class="wrapper">
        <br>
    <div class="row">
       <div class="col-md-12 col-sm-12 col-xs-12">
        <h3 class="page-header"><i class="fa fa fa-bars"></i><b> MODULO DE ASPIRANTES</b></h3>
      </div>
    </div>
    <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
          <h3 class="page-header"><i class="fa fa fa-bars"></i>¡Cursos Virtuales! Déjanos tu información y nos comunicaremos contigo</h3>
        </div>
      </div>


	{!! Form::open(['route' => ['registro_estudiantes.store'], 'method' => 'POST', 'id' => 'form_registro_estudiante' ]) !!}
<br><br><br>
    <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-12" ></div>
        <div class="col-md-3 col-sm-3 col-xs-12" >
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                <label for="nombres">Nombres</label> 
                {{ Form::text('nombres', null, ['class' => 'form-control input-sm','required'=>'required', 'id' => 'nombres']) }}
                </div>
           </div>
         
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="apellidos">Apellidos</label> 
              {{ Form::text('apellidos', null, ['class' => 'form-control input-sm','required'=>'required', 'id' => 'apellidos']) }}
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                <label for="email">Email</label> 
                {{ Form::email('email', null, ['class' => 'form-control input-sm','required'=>'required', 'id' => 'email']) }}
                </div>
            </div>      
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                <label for="telefono">Telefono</label> 
                {{ Form::number('telefono', null, ['class' => 'form-control input-sm','required'=>'required', 'id' => 'telefono']) }}
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                <label for="programa">Programa</label> 
                {{ Form::select('programa', $g_programas, null, ['class'=>'form-control','required'=>'required', 'placeholder'=>'Seleccione ...', 'id' => 'programa']) }}
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="submit" class="btn btn-info" name="btnEnviar" id="btnEnviar" value="ENVIAR INFORMACIÓN" >
                  </div>
              </div>

        </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <img class="img-fluid" src="{{ asset('img/educacion.jpg') }}" />
                </div>
            </div>   
        </div> 

    </div>
   
 

    {!! Form::close() !!}
    

    <script src="{{ asset('js/registro_estudiantes/create.js') }}" defer></script>
 

</div>
</section>
@endsection
