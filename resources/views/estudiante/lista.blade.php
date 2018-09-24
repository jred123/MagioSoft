@extends('menu.menulist')
@section('titulo1list', 'LISTA')
@section('titulo2list', 'DE ESTUDIANTES')
@section('contentlist')

<div class="table-responsive table-striped">
<h4>Seleccione el numero de filas </h4>
<div class="form-group">
    <select name="state" id="maxRows" class="form-control" style="width:150px;">
        <option value="5000">Ver Todo</option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
    </select>
</div>
<table id="mytable" class="table table-bordered table-striped">
    <thead class="thead-light">
      <tr>
          <th scope="col">CodigoSis</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido Paterno</th>
          <th scope="col">Apellido Materno</th>
          <th scope="col">CI</th>
          <th scope="col">Telefono</th>
          <th scope="col">Correo</th>
          <th scope="col"></th>
          <th scope="col">
            <div class="text-center">
              <h3>
                <a href='{{ route('estudiante.create')}}' data-toggle="tooltip" data-placement="right" title="Registar">
                  <i class="fas fa-plus-square" aria-hidden="true" ></i>
                </a>
              </h3>
            </div>
          </th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $estudiante)
      <tr>
        <td>{{ $estudiante -> COD_SIS}} </td>
        <td>{{ $estudiante -> NOM_EST}} </td>
        <td>{{ $estudiante -> AP_PAT_EST}} </td>
        <td>{{ $estudiante -> AP_MAT_EST}} </td>
        <td>{{ $estudiante -> CI}} </td>
        <td>{{ $estudiante -> TELF}} </td>
        <td>{{ $estudiante -> CORRETO_EST}} </td>
        <td>
            <div class="text-center">
                <h4>
                  <a href='{{route('estudiante.edit',$estudiante->id)}}' data-toggle="tooltip" data-placement="right" title="Editar">
                      <i class="fas fa-pencil-alt"aria-hidden="true"></i>
                  </a>
              </h4>
            </div>
        </td>
        <td>
            <div class="text-center">
                <h4>
                  <a href='{{ url('estudiante.ocultar',$estudiante->id)}}' onclick="return confirm('¿Esta seguro de eliminar este Estudiante?')" data-toggle="tooltip" data-placement="right" title="Eliminar">
                      <i class="fas fa-trash-alt" aria-hidden="true"></i>
                  </a>
              </h4>
            </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
<nav aria-label="...">
  <ul class="pagination pagination-lg"></ul>
</nav>
</div>

@endsection
