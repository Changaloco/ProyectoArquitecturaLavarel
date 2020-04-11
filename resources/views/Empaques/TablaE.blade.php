@extends('layouts.MasterLayout')

@section('title', 'Tabla Empaques')
@section('content')
<main class="page">
        <section class="clean-block slider">
        <div class="container">
            <a href="{{route('insertarE')}}" type="button" class="btn btn-outline-secondary" style="margin-bottom: 10px; width: 150px; position: relative; left: 85%;">Insertar</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>id</th>
                            <th>Material</th>
                            <th>Capacidad</th>
                            <th></th>
                            <th></th>
                            </tr>
                        </thead>
                        @foreach($empaque as $empaques)
                        <tbody>
                            <tr>
                            <td>{{$empaques->id_empaque}}</td>
                            <td>{{$empaques->material}}</td>
                            <td>{{$empaques->capacidad}}</td>
                            
                            <td><a href="{{url('/editar/'.$empaques->id)}}" type="button" class="btn btn-outline-dark">Editar </a><a href="{{url('/delete/'.$empaques->id)}}" type="button" class="btn btn-outline-dark" style="margin-left: 8px;">Eliminar </a></td>
                            </tr>
                            
                        
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </main>

@endsection