@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            C Categoria
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'cCategorias.store']) !!}

                        @include('c_categorias.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
