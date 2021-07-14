@extends('adminlte::page')

@section('template_title')
    {{ $empresa->name ?? 'Show Empresa' }}
@endsection

@section('content')
    <br><section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empresa->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Empresa:</strong>
                            {{ $empresa->id_tipo_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $empresa->observacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
