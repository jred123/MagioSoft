@extends('menu.menulistuserstandard')
@section('titulo1list', 'LISTA')
@section('titulo2list', 'DE MODALIDADES')
@section('contentlist')
<div class="table-responsive">
<table class="table" id="table_id">
    <thead class="thead-light">
      <tr>
          <th scope="col">Modalidad</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Inicial</th>
          <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($modalidades as $modalidad)
      <tr>
        <td>{{ $modalidad -> NOM}} </td>
        <td>{{ $modalidad -> DESC}} </td>
        <td>{{ $modalidad -> INICIAL}} </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  
@endsection