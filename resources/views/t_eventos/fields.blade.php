<!-- Nombre Evento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_evento', 'Nombre conferencia / panel:') !!}
    {!! Form::text('nombre_evento', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('nombre_conferencista', 'Nombre del conferencista / moderador') !!}
    {!! Form::text('nombre_conferencista', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-2">
    {!! Form::label('fecha', 'fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha_de_inicio']) !!}
</div>
<div class="form-group col-sm-2">
    {!! Form::label('inicio', 'inicio:') !!}
    {!! Form::text('inicio', null, ['class' => 'form-control','id'=>'inicio']) !!}
</div>

@section('scripts')
    
    <script type="text/javascript">

        $('#fecha_de_inicio').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })

        $('#inicio').datetimepicker({
            format: 'HH:mm',
            useCurrent: false
        })

        $('#fin').datetimepicker({
            format: 'HH:mm',
            useCurrent: false
        })
    </script>
@endsection

<div class="form-group col-sm-2">
    {!! Form::label('fin', 'fin:') !!}
    {!! Form::text('fin', null, ['class' => 'form-control','id'=>'fin']) !!}
</div>
<div class="form-group col-sm-3">
    {!! Form::label('cargo', 'Cargo:') !!}
    {!! Form::text('cargo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-3">
    {!! Form::label('empresa', 'Empresa:') !!}
    {!! Form::text('empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Evento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_evento', 'Descripcion Evento:') !!}
    {!! Form::textarea('descripcion_evento', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('bio', 'Biografia del ponente / panelistas') !!}
    {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Evento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_evento_id', 'Tipo Evento Id:') !!}
    {!! Form::select('tipo_evento_id', $tipo_eventos, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url del streaming de youtube / link de aliado') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('facebook', 'Facebook ponente : (Opcional)') !!}
    {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('instagram', 'Instagram ponente : (Opcional)') !!}
    {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('twitter', 'Twitter ponente : (Opcional)') !!}
    {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('youtube', 'Youtube ponente : (Opcional)') !!}
    {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-3">
    {!! Form::label('panel1', 'Panelista 1 : (Opcional)') !!}
    {!! Form::text('panel1', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-3">
    {!! Form::label('panel2', 'Panelista 2 : (Opcional)') !!}
    {!! Form::text('panel2', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-3">
    {!! Form::label('panel3', 'Panelista 3 : (Opcional)') !!}
    {!! Form::text('panel3', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-3">
    {!! Form::label('panel4', 'Panelista 4 : (Opcional)') !!}
    {!! Form::text('panel4', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Img Field -->
{{-- <div class="form-group col-sm-12 col-lg-12" >
    {!! Form::label('url_img', 'Url Img:') !!}
    {!! Form::file('url_img', null, ['class' => 'form-control']) !!}
</div>

@if(Request::is('tEventos/update'))
<div class="col-sm-12 col-lg-12">
     <img width="70px" src="http://ceo.grakaja.com/{{$tEvento->url_img}}" alt=""> 
</div>
@endif --}}


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tEventos.index') }}" class="btn btn-default">Cancelar</a>
</div>
