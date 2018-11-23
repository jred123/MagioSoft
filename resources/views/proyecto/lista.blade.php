@extends('menu.menulist')
@section('titulo1list', 'LISTA')
@section('titulo2list', 'DE PERFILES')
@section('contentlist')
<div class="row justify-content-center">
  <div class="col-12">
      {!! Form::open(['route'=>'proyecto.index','method'=>'GET','data-parsley-validate'=>"",'class'=>'card card-sm']) !!}
        <div class="card-body row no-gutters align-items-center">
            <div class="col">
              {!! Form::text('TITULO_PERFIL', null, ['class'=>'form-control form-control-lg form-control-borderless', 'data-parsley-pattern'=>"^[a-zA-Z ]+$",'placeholder'=>"Buscar Perfil"]) !!}
            </div>
            <div class="col-auto">
              {!! Form::submit('Buscar', ['class'=>'btn btn-lg btn-warning btn_White']) !!}
            </div>
            <!--end of col-->
        </div>
      {!! Form::close() !!}
  </div>
  <!--end of col-->
</div>


<div class="table-responsive">
  <table class="table" id="table_id">
    <thead class="thead-light">
      <tr>
        <th scope="col">Código</th>
        <th></th>
        <th scope="col">Título</th>
        <th scope="col">Estudiante</th>
        <th scope="col">Tutor</th>
        <th scope="col">Tribunal</th>
        <th scope="col">
          <div class="text-center">
            <h3>
              <a href='{{ route('proyecto.create')}}' data-toggle="tooltip" data-placement="right" title="Registar">
                <i class="fas fa-plus-square btn-warning" aria-hidden="true" ></i>
              </a>
            </h3>
          </div>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($proyectos as $proyecto)
      @if ($proyecto->CICLO == 'en progreso')
      <tr>
        <td>
          {{ $proyecto -> id }} </td>
        <td> 
          {{ $proyecto -> modalidad -> INICIAL}}
          @if($proyecto -> modalidad -> id == 1 ) 
          {{$proyecto -> modalidad -> CANT+1}}
          @endif

         </td>
        <td>{{ $proyecto -> TITULO_PERFIL}} </td>
        <td>{{ $proyecto -> estudiante->pluck('full_name', 'id')->implode(' ')}} </td>
        <td>
          @foreach ($proyecto->estudiante as $e)
          @foreach ($e->profesional as $p)
              {{ $p->NOM_PROF.' '.$p->AP_PAT_PROF.' '.$p->AP_MAT_PROF.',' }}
          @endforeach
          @endforeach
        </td>
        <td>
          @foreach ($proyecto->profesional as $tribunal)

              @if ($tribunal->pivot->motivo_id==1)

                {{ $tribunal->NOM_PROF.' '.$tribunal->AP_PAT_PROF.' '.$tribunal->AP_MAT_PROF.','}}

              @endif

          @endforeach
        </td>
        <td>
          <div class="btn-group">
             <button type="button" class="btn btn-warning btn_White">Ver</button>
             <button type="button" class="btn btn-warning btn_White dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="sr-only">Toggle Dropdown</span>
             </button>
             <div class="dropdown-menu">
               <a href='{{ route('proyecto.edit',$proyecto->id)}}' data-toggle="tooltip" data-placement="right" title="Editar">
                <i class="fas fa-pencil-alt btn-warning"aria-hidden="true"></i>
              </a>
              <!--<a href='{{ route('tribunal.asignar',$proyecto->id) }}' data-toggle="tooltip" data-placement="right" title="Asignar tribunales">
                <i class="fas fa-gavel btn-warning" aria-hidden="true"></i>
              </a>-->
              <a href='{{ route('proyecto.finalizar',$proyecto->id) }}' data-toggle="tooltip" data-placement="right" title="finalizar ciclo">
                <i class="fa fa-clipboard btn-warning" aria-hidden="true"></i>
              </a>
              <a href='{{ url('proyecto/ocultar',$proyecto->id)}}' onclick="return confirm('¿Esta seguro de eliminar este Proyecto?')" data-toggle="tooltip" data-placement="right" title="Eliminar">
                <i class="fas fa-trash-alt btn-warning" aria-hidden="true"></i>
              </a>
             </div>
          </div>
        </td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
</div>
@endsection
