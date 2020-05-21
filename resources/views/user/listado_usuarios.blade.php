@extends('layouts.home')


@section('content')
<br>
<br>
<div class="col-md-3"></div>

<div class="col-md-6">

    <br><br><br>
    <h3 style="text-align: center"><b>Listado de usuarios</b></h3>
    <br>
    <br>
    <table class="table table-responsive table-bordered">
        <thead>
            <tr style="    background: #222222;color: white;">
                <th>Nombres</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($g_user as $user)
            <tr>
              <td>{{ $user['name'] }}</td>
              <td>{{ $user['email'] }}</td>


            </tr>
            @endforeach
    </table>

</div>



@endsection
