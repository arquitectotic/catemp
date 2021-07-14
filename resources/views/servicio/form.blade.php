<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Tipo de Servicio') }}
            {{ Form::text('id_tipo_servicio', $servicio->id_tipo_servicio, ['class' => 'form-control' . ($errors->has('id_tipo_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Opción']) }}
            {!! $errors->first('id_tipo_servicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('precio', $servicio->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-primary" href="{{ route('servicios.index') }}" style="margin-left: 0.5em"> Volver</a>
    </div>
</div>