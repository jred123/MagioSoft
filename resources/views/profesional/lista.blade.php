@extends('menu.menulist')
@section('titulo1list', 'LISTA')
@section('titulo2list', 'DE PROFESIONALES')
@section('contentlist')

{!! Form::open((array('url'=>'profesional','method'=>'GET','class' => 'navbar-form navbar-left pull-right'))) !!}


  {!! Form::close() !!}


<div class="table-responsive">
<table id="mytable" class="table table-bordered table-striped">
    <thead class="thead-light">
      <tr>
          <th scope="col">Título</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido Paterno</th>
          <th scope="col">Apellido Materno</th>
          <th scope="col">Codigo Universidad</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Correo</th>
          <th></th>
          <th scope="col">
            <div class="text-center">
              <h3>
                <a href='{{ route('profesional.create')}}' data-toggle="tooltip" data-placement="right" title="Registar">
                  <i class="fas fa-plus-square btn-warning" aria-hidden="true" ></i>
                </a>
              </h3>
            </div>
          </th>
        </tr>
    </thead>
    <tbody>
        @foreach($profesionales as $profesional)
      <tr>
        <td>{{ $profesional -> titulo->nombre}}</td>
        <td>{{ $profesional -> NOM_PROF}} </td>
        <td>{{ $profesional -> AP_PAT_PROF}} </td>
        <td>{{ $profesional -> AP_MAT_PROF}} </td>
        <td>{{ $profesional -> COD_UNI}} </td>
        <td>{{ $profesional -> TELF_PROF}} </td>
        <td>{{ $profesional -> CORREO_PROF}} </td>
        <td>
          <div class="text-center">
              <h4>
                <a href='{{ route('profesional.edit',$profesional->id)}}' data-toggle="tooltip" data-placement="right" title="Editar">
                    <i class="fas fa-pencil-alt btn-warning" aria-hidden="true"></i>
                </a>
            </h4>
          </div>
      </td>
      <td>
          <div class="btn-group">
             <button type="button" class="btn btn-warning btn_White">Ver</button>
             <button type="button" class="btn btn-warning btn_White dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="sr-only">Toggle Dropdown</span>
             </button>
             <div class="dropdown-menu">
               <a href='{{ url('profesional.ocultar',$profesional->id)}}' onclick="return confirm('¿Esta seguro de eliminar este Profesional?')" data-toggle="tooltip" data-placement="right" title="Eliminar">
                      <i class="fas fa-trash-alt btn-warning" aria-hidden="true"></i>
               </a>
               <!--<a href='{{ route('tribunal.listaReasignar',$profesional->id)}}' data-toggle="tooltip" data-placement="right" title="reasignar trinubal">
                      <i class="fas fa-eraser btn-warning" aria-hidden="true" ></i>
               </a>-->
               <a href='{{ route('tribunal.listaTutores',$profesional->id )}}' data-toggle="tooltip" data-placement="right" title="ver lista de tutorías">
                  <i class="fa fa-book btn-warning" aria-hidden="true"></i>
                </a>
                <!--<a href='{{ route('tribunal.listaReasignar',$profesional->id )}}' data-toggle="tooltip" data-placement="right" title="ver proyectos de los que ha sido tribunal">
                  <i class="fa fa-book btn-warning" aria-hidden="true"></i>
                </a>-->
             </div>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
{!!$profesionales->render("pagination::bootstrap-4")!!}
</div>

@endsection
