@extends('layouts.home')

@section('content')
<div class="container" >
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="border: solid 1px">
                <div class="card-header" style="text-align: center;background: #343a40; color: white;">Lista Aspirantes</div>

                <div class="card-body">
                    <div class="form-group row mb-0">
                        <div class="col-md-12 offset-md-12" style="text-align: center; margin-top: 15px;">
                            <a class="btn btn-primary" href="registro_estudiantes/list_aspirantes">
                               Ver lista
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="border: solid 1px">
                <div class="card-header" style="text-align: center;background: #343a40; color: white;">Lista Usuarios</div>

                <div class="card-body">
                    <div class="form-group row mb-0">
                        <div class="col-md-12 offset-md-12" style="text-align: center; margin-top: 15px;">
                            <a class="btn btn-primary"  href="user/list" >
                               Ver lista
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



