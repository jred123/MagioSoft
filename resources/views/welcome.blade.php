
@extends('layouts.principal')
@section('titulo1', 'Universidad Mayor De San Simon')
@section('titulo2', 'Departamento de Informática y Sistemas.')
@section('menu')
<div class="row">
            <div class="col">
              <div class="main_menu_container d-flex flex-row align-items-center justify-content-start">
                <div class="main_menu_content">
                  <ul class="main_menu_list">
                    <li class="active"><a href="/">Inicio
                      <svg version="1.1" id="Layer_16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                        <g>
                          <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                        </g>
                      </svg>
                    </a></li>
                    <li class="hassubs">
                      <a href="#">Registrar
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                          <g>
                            <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                          </g>
                        </svg>
                      </a>
                      <ul>
                        <li><a href="{{ route('profesional.create') }}">Registrar Profesional
                          <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                        <li><a href="{{ route('proyecto.create') }}">Registrar Perfil
                          <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                        <li><a href="{{ route('estudiante.create') }}">Registrar Estudiantes
                          <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                        <li><a href="{{ route('carrera.create') }}">Registrar Carreras
                          <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                        <li><a href="{{ route('area.create') }}">Registrar Area
                          <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                        <li><a href="{{ route('modalidad.create') }}">Registrar Modalidad
                          <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                        <li><a href="{{ route('gestion.create') }}">Registrar gestion
                          <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                      </ul>
                    </li>
                    <li class="hassubs">
                      <a href="#">Listas
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                          <g>
                            <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                          </g>
                        </svg>
                      </a>
                      <ul>
                        <li><a href="{{ route('profesional.index') }}">Lista de Profesionales
                          <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                        <li><a href="{{ route('proyecto.index') }}">Lista de Perfiles
                          <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                        <li><a href="{{ route('estudiante.index') }}">Lista de Estudiantes
                          <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                        <li><a href="{{ route('carrera.index') }}">Lista de Carreras
                          <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                        <li><a href="{{ route('area.index') }}">Lista de Areas
                          <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                        <li><a href="{{ route('modalidad.index') }}">Lista de Modalidades
                          <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                        <li><a href="{{ route('gestion.index') }}">Lista de Gestiones
                          <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                            <g>
                              <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                            </g>
                          </svg>
                        </a></li>
                      </ul>
                    </li>
                    <!--<li  class=""><a href="/">Sugerir
                      <svg version="1.1" id="Layer_16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                        <g>
                          <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                        </g>
                      </svg>
                    </a></li>-->
                  </ul>
                </div>
                <div class="main_menu_contact ml-auto">
                  
                  <div class="main_menu_search">
                    <div class="main_menu_search_button">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="15px" height="15px">
                        <g>
                        <path class="mag_path" d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z" fill="#f4f4f8"/>
                        </g>
                      </svg>
                    </div>
                    <div class="main_menu_search_content">
                      <form action="#">
                        <input class="search_input" type="search" placeholder="Palabra Clave" required="required">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

@section('content')

<!-- Main Content -->
<div class="row">
	<div class="col-lg-6">
		<div class="intro_image text-lg-right text-center"><img src="images/intro.png" alt=""></div>
	</div>
	<div class="col-lg-6">
		<div class="intro_content">
			<div class="intro_title_container">
				<div class="intro_subtitle">Perfil</div>
				<h1 class="intro_title">Sistema de Registro de Perfiles</h1>
			</div>
			<div class="intro_text">
				<p>Para el mejor control y registro de los perfiles de los estudiantes, se desarrollo esta plataforma con la intencion de facilitar a los estudiantes el registro de sus temas y tutores.</p>
			</div>
		</div>
	</div>
</div>

@endsection
