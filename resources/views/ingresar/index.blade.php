@extends('menu.menuLogin')
@section('titulo1menu', 'Ingresar')
@section('titulo2menu', 'al sistema')
@section('contentmenu')

<h1 class="form-heading">login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Login</h2>
   <p>Por favor ingrese su usuario y contraseña</p>
   </div>
    <form id="Login">
        <div class="form-group">
            <input type="email" class="form-control" id="inputUser" placeholder="Nombre de usuario">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>

    </form>
    </div>
<p class="botto-text"> Designed by Sunil Rajput</p>
</div></div>

@endsection