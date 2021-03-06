@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipos Usuarios
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cTipoUsuario, ['route' => ['cTipoUsuarios.update', $cTipoUsuario->id], 'method' => 'patch']) !!}

                        @include('c_tipo_usuarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection