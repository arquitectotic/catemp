<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_registro') }}
            {{ Form::date('fecha_registro', $registro->fecha_registro, ['class' => 'form-control' . ($errors->has('fecha_registro') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Registro']) }}
            {!! $errors->first('fecha_registro', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_registro') }}
            {{ Form::time('hora_registro', $registro->hora_registro, ['class' => 'form-control' . ($errors->has('hora_registro') ? ' is-invalid' : ''), 'placeholder' => 'Hora Registro']) }}
            {!! $errors->first('hora_registro', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Asesor') }}
            {{ Form::text('user_id', $registro->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Opción']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cliente') }}
            {{ Form::text('id_cliente', $registro->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Opción']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::text('id_empresa', $registro->id_empresa, ['class' => 'form-control' . ($errors->has('id_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Opción']) }}
            {!! $errors->first('id_empresa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Servicio') }}
            {{ Form::text('id_servicio', $registro->id_servicio, ['class' => 'form-control' . ($errors->has('id_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Opción']) }}
            {!! $errors->first('id_servicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Poliza') }}
            {{ Form::text('id_poliza', $registro->id_poliza, ['class' => 'form-control' . ($errors->has('id_poliza') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Opción']) }}
            {!! $errors->first('id_poliza', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Canal de Ventas') }}
            {{ Form::text('id_canal', $registro->id_canal, ['class' => 'form-control' . ($errors->has('id_canal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Opción']) }}
            {!! $errors->first('id_canal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contacto') }}
            {{ Form::text('id_contacto', $registro->id_contacto, ['class' => 'form-control' . ($errors->has('id_contacto') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Opción']) }}
            {!! $errors->first('id_contacto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Zona de Contacto') }}
            {{ Form::text('zona_contacto', $registro->zona_contacto, ['class' => 'form-control' . ($errors->has('zona_contacto') ? ' is-invalid' : ''), 'placeholder' => 'Escriba la Ubicación de Contacto con el Cliente']) }}
            {!! $errors->first('zona_contacto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Acción Comercial') }}
            {{ Form::text('id_accion', $registro->id_accion, ['class' => 'form-control' . ($errors->has('id_accion') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Opción']) }}
            {!! $errors->first('id_accion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Etapa de Oportunidad') }}
            {{ Form::text('id_etapa', $registro->id_etapa, ['class' => 'form-control' . ($errors->has('id_etapa') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Opción']) }}
            {!! $errors->first('id_etapa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_proxima_accion') }}
            {{ Form::date('fecha_proxima_accion', $registro->fecha_proxima_accion, ['class' => 'form-control' . ($errors->has('fecha_proxima_accion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Proxima Accion']) }}
            {!! $errors->first('fecha_proxima_accion', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-primary" href="{{ route('registros.index') }}" style="margin-left: 0.5em"> Volver</a>
    </div>
</div>