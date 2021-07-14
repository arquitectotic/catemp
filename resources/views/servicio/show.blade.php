@extends('adminlte::page')

@section('template_title')
    {{ $servicio->name ?? 'Show Servicio' }}
@endsection

@section('content')
    <br><section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('servicios.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo de Servicio:</strong>
                            {{ $servicio->id_tipo_servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $servicio->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
