<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Documento') }}
            {{ Form::text('documento', $cliente->documento, ['class' => 'form-control' . ($errors->has('documento') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('documento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Documento') }}
            {{ Form::text('id_tipo_documento', $cliente->id_tipo_documento, ['class' => 'form-control' . ($errors->has('id_tipo_documento') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Opción']) }}
            {!! $errors->first('id_tipo_documento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre', $cliente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('telefono', $cliente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('email', $cliente->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'cliente@gmail.com']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('direccion', $cliente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Ej: Cra 10 # 20-21 Plaza de Bolivar']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Municipio') }}
            {{ Form::text('municipio', $cliente->municipio, ['class' => 'form-control' . ($errors->has('municipio') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('municipio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado del Cliente') }}
            {{ Form::text('id_estado_cliente', $cliente->id_estado_cliente, ['class' => 'form-control' . ($errors->has('id_estado_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Opción']) }}
            {!! $errors->first('id_estado_cliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        {{--<div class="form-group">
            {{Form::label('Estado del Cliente')}}
            {!! Form::select('id_estado_cliente', $cliente, $cliente->id_estado_cliente, ['class' => 'form-control' . ($errors->has('id_estado_cliente') ? ' is-invalid' : ''), 'placeholder' => '']) !!}
            {!! $errors->first('id_estado_cliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            <label class="form-label">Estado</label>
            <select class="form-control" aria-label="" name="estado_cliente">
                <option value="{{'id'}}">{{$cliente->id_estado_cliente}}</option>
                <?php //foreach ($estados as $est):?>
                    <option value="{{$est->id}}">{{$est->estado_cliente}}</option>
                <?php //endforeach; ?>
            </select>
            {!! $errors->first('estado_cliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>--}}

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-primary" href="{{ route('clientes.index') }}" style="margin-left: 0.5em"> Volver</a>
    </div>
</div>