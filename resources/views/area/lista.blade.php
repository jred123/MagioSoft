@extends('menu.menulist')
@section('titulo1list', 'LISTA')
@section('titulo2list', 'DE AREAS')
@section('contentlist')
<div class="row justify-content-center">
  <div class="col-12">
      {!! Form::open(['route'=>'area.index','method'=>'GET','data-parsley-validate'=>"",'class'=>'card card-sm']) !!}
        <div class="card-body row no-gutters align-items-center">
            <div class="col">
              {!! Form::text('NOMBRE_AREA', null, ['class'=>'form-control form-control-lg form-control-borderless', 'data-parsley-pattern'=>"^[a-zA-Z ]+$",'placeholder'=>"Buscar Area"]) !!}
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
<table id="mytable" class="table table-bordered table-striped">
    <thead class="thead-light">
      <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
          <th></th>
          <th></th>
          <th scope="col">
            <div class="text-center">
              <h3>
                <a href='{{ route('area.create')}}' data-toggle="tooltip" data-placement="right" title="Registar">
                  <i class="fas fa-plus-square btn-warning" aria-hidden="true" ></i>
                </a>
              </h3>
            </div>
          </th>
        </tr>
    </thead>
    <tbody>
        @foreach($areas as $area)
      <tr>
        <td>{{ $area -> id}} </td>
        <td>{{ $area -> NOMBRE_AREA}} </td>
        <td>{{ $area -> DESC_AREA}} </td>
        <td>
            <div class="text-center">
              <h4>
                <a href='{{ route('area.edit',$area->id)}}' data-toggle="tooltip" data-placement="right" title="Editar">
                  <i class="fas fa-pencil-alt btn-warning"aria-hidden="true"></i>
                </a>
              </h4>
            </div>
        </td>
        <td>
            <div class="text-center">
              <h4>
                <a href='{{ route('subarea.recibe',$area->id) }}' data-toggle="tooltip" data-placement="right" title="Registar Subarea">
                  <i class="fas fa-plus-square btn-warning" aria-hidden="true"></i>
                </a>
              </h4>
            </div>
        </td>
        <td>
            <div class="text-center">
                <h4>
                  <a href='{{ url('area/ocultar',$area->id)}}' onclick="return confirm('¿Esta seguro de eliminar esta Area?')" data-toggle="tooltip" data-placement="right" title="Eliminar">
                      <i class="fas fa-trash-alt btn-warning" aria-hidden="true"></i>
                  </a>
              </h4>
            </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
{!!$areas->render("pagination::bootstrap-4")!!}

</div>

@endsection
