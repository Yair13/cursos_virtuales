@extends('layouts.home')


@section('content')
<div class="container-fluid" style="text-align: center">
	<section class="wrapper">
        <br>
        <h3><b>Creacion de usuarios</b></h3>
    <div class="row">

	{!! Form::open(['route' => ['user.store'], 'method' => 'POST', 'id' => 'form_usuarios' ]) !!}
<br><br><br>

    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12" ></div>
        <div class="col-md-4 col-sm-4 col-xs-12" >
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                <label for="name">Nombres</label> 
                {{ Form::text('name', null, ['class' => 'form-control input-sm','required'=>'required', 'id' => 'name']) }}
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
                <label for="password">Clave</label> 
                {{ Form::text('password', null, ['class' => 'form-control input-sm','required'=>'required', 'id' => 'password']) }}
                </div>
            </div>


            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="submit" class="btn btn-info" name="btnEnviar" id="btnEnviar" value="CREAR USUARIO" >
                  </div>
              </div>

        </div>
  

    </div>
   
 

    {!! Form::close() !!}
    

    <script src="{{ asset('js/user/create.js') }}" defer></script>
 

</div>
</section>
@endsection
