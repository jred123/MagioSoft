@extends('menu.menulist')
@section('titulo1list', 'RREPORTE')
@section('titulo2list', 'DE PROYECTOS')
@section('contentlist')


<div class="table-responsive">
  <table class="table" id="table_id">
    <thead class="thead-light">
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Estudiante</th>
        <th scope="col">Tutor</th>
        <th scope="col">Fecha Registro</th>
        <th scope="col">Fecha Vencimiento</th>
      </tr>
    </thead>
    <tbody>
      @foreach($proyectos as $proyecto)
      @if ($proyecto->CICLO !='en progreso')
      <tr>
          <td>{{ $proyecto -> id}} </td>
          <td>{{ $proyecto -> estudiante->pluck('full_name', 'id')->implode(' ')}} </td>
          <td>
              @foreach ($proyecto->estudiante as $e)
              @foreach ($e->profesional as $p)
                
                {{-- @if () --}}
                  {{ $p->NOM_PROF.' '.$p->AP_PAT_PROF.' '.$p->AP_MAT_PROF.',' }}

                {{-- @endif --}}
              @endforeach
              @endforeach
            </td>
            <td>{{ $proyecto -> FECHA_REGISTRO}}</td>
            <td>{{ $proyecto -> GESTION_LIMITE}} </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
</div>
@endsection