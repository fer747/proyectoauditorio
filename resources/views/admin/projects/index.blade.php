@extends('layouts.app')

@section('content')


        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                @if (session('notification'))
                    <div class="alert alert-success">
                        {{session('notification')}}


                    </div>


                @endif

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            
                            @foreach($errors->all() as $error)
                                <li>
                                    
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                        


                    </div>


                    @endif

                    <form action="" method="POST">
                        {{csrf_field()}}



                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" class="form-control"
                            value="{{old('name')}}">

                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control"
                            value="{{old('descripcion')}}">

                        </div>


                        <div class="form-group">
                            <label for="start">Fecha de inicio</label>
                            <input type="date" name="start" class="form-control"
                            value="{{old('start', date('Y-m-d'))}}">

                        </div>
                        <p></p>
                        <div class="form-group">
                            <button class="btn btn-primary">Registrar Proyecto</button>
                            
                        </div>
                        
                    </form>
                    <p></p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Fecha de inicio</th>
                                <th>Opciones</th>
                                

                            </tr>
                            

                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td>{{$project->name}}</td>
                                <td>{{$project->descripcion}}</td>
                                <td>{{$project->start ?: 'No se ha indicado fecha de inicio'}}</td>
                                
                                <td>
                                    
                                    @if ($project->trashed())
                                    <a href="/proyecto/{{ $project ->id }}/restaurar" class="btn btn-sm btn-success" title="Restaurar">
                                        <i class="bi bi-hammer"></i>
                                    </a>

                                    @else

                                    <a href="/proyecto/{{$project->id}}" class="btn btn-sm btn-primary" title="Editar">
                                        <i class="bi bi-pen"></i>
                                    </a>
                                    <a href="/proyecto/{{ $project ->id }}/eliminar" class="btn btn-sm btn-danger" title="Dar de baja">
                                        <i class="bi bi-trash"></i>
                                    </a>

                                    @endif
                                </td>
                                

                            </tr>
                            

                            @endforeach
                        </tbody>
                        

                    </table>
                </div>
            </div>
        </div>
@endsection
