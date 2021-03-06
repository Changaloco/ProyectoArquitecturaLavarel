@extends('layouts.MasterLayout')
@section('title', 'Tabla Empaques')
@section('content')
<main class="page">
        <section class="clean-block slider">
        <div class="container">
            <form role="search" action="{{url('buscarE')}}">
            <div class="form group">
                <input type="text" class="form-control" placeholder="Busqueda por material" name="search">

            </div>
            </form>
            <a href="{{route('insertarE')}}" type="button" class="btn btn-outline-secondary" style="margin-bottom: 10px; width: 150px; position: relative; left: 85%;">Insertar</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>id</th>
                            <th>Material</th>
                            <th>Capacidad (Kg)</th>
                            <th>cantidad</th>
                            <th>Fecha de Registro</th>
                            </tr>
                        </thead>
                        @foreach($empaque as $empaques)
                        <tbody>
                            <tr>
                            <td>{{$empaques->id}}</td>
                            <td>{{$empaques->material}}</td>
                            <td>{{$empaques->capacidad}}</td>
                            <td>{{$empaques->cantidad}}</td>
                            <td>{{ \FormatTime::LongTimeFilter($empaques->created_at) }}</td>
                            <td><a href="{{url('/editarE/'.$empaques->id)}}" type="button" class="btn btn-outline-dark">Editar </a><a href="{{url('/deleteE/'.$empaques->id)}}" type="button" class="btn btn-outline-dark" style="margin-left: 8px;">Eliminar </a></td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </main>

@endsection