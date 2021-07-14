@extends('adminlte::page')

@section('template_title')
    {{ $registro->name ?? 'Show Registro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registros.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Registro:</strong>
                            {{ $registro->fecha_registro }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Registro:</strong>
                            {{ $registro->hora_registro }}
                        </div>
                        <div class="form-group">
                            <strong>Asesor:</strong>
                            {{ $registro->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $registro->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Id Empresa:</strong>
                            {{ $registro->id_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Id Servicio:</strong>
                            {{ $registro->id_servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Id Poliza:</strong>
                            {{ $registro->id_poliza }}
                        </div>
                        <div class="form-group">
                            <strong>Id Canal:</strong>
                            {{ $registro->id_canal }}
                        </div>
                        <div class="form-group">
                            <strong>Id Contacto:</strong>
                            {{ $registro->id_contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Zona Contacto:</strong>
                            {{ $registro->zona_contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Id Accion:</strong>
                            {{ $registro->id_accion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Etapa:</strong>
                            {{ $registro->id_etapa }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Proxima Accion:</strong>
                            {{ $registro->fecha_proxima_accion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
