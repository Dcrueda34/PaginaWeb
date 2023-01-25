@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombrepro:</strong>
                            {{ $producto->nombrepro }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $producto->color }}
                        </div>
                        <div class="form-group">
                            <strong>Referencia:</strong>
                            {{ $producto->referencia }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $producto->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $producto->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Id Vemta:</strong>
                            {{ $producto->id_vemta }}
                        </div>
                        <div class="form-group">
                            <strong>Id Categoria:</strong>
                            {{ $producto->id_categoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
