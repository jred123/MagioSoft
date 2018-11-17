@extends('layouts.principal')
@section('titulo1')
	@yield('titulo1standard')
@endsection
@section('titulo2')
	@yield('titulo2standard')
@endsection
@section('menu')
<div class="row">
            <div class="col">
              <div class="main_menu_container d-flex flex-row align-items-center justify-content-start">
                <div class="main_menu_content">
                  <ul class="main_menu_list">
                    <li class=""><a href="/">Inicio
                      <svg version="1.1" id="Layer_16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                        <g>
                          <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                        </g>
                      </svg>
                    </a></li>
                     <li><a href="{{ url('standard') }}">Lista de Usuarios
                          <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                </div>
            </div>
          </div>
@endsection
@section('content')
  @yield('contentlist')
@endsection
