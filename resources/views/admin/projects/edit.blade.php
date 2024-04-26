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
                            value="{{old('name', $project->name)}}">

                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control"
                            value="{{old('descripcion', $project->descripcion)}}">

                        </div>


                        <div class="form-group">
                            <label for="start">Fecha de inicio</label>
                            <input type="date" name="start" class="form-control"
                            value="{{old('start', $project->start) }}">

                        </div>
                        <p></p>
                        <div class="form-group">
                            <button class="btn btn-primary">Guardar Proyecto</button>
                            
                        </div>
                        
                    </form>
                    <div class="row">
                        <div class="col-md-6"> 

                            <p>Categorias</p>
                            <form action="/categorias" method="POST" class="form-inline">
                                {{csrf_field()}}

                                <input type="hidden" name="project_id" value="{{ $project->id }}">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Ingrese nombre" class="form-control">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary">Añadir</button>
                                </div>
                                

                            </form>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Opciones</th>
                                        

                                    </tr>
                                    

                                </thead>
                                <tbody>

                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-primary" title="Editar">
                                                <i class="bi bi-pen"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-danger" title="Dar de baja">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                        

                                    </tr>

                                    @endforeach
                                    


                                </tbody>
                                

                            </table>
                            

                        </div>

                        <div class="col-md-6">

                        <p>Niveles</p>
                        <form action="/niveles" method="POST" class="form-inline">
                            {{csrf_field()}}
                            <input type="hidden" name="project_id" value="{{ $project->id }}">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Ingrese nombre" class="form-control">

                            </div>
                            <button class="btn btn-primary">
                                Añadir
                                

                            </button>
                            

                        </form>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nivel</th>
                                        <th>Opciones</th>
                                        

                                    </tr>
                                    

                                </thead>
                                <tbody>
                                    @foreach ($levels as $key => $level)
                                    <tr>
                                        <td>N{{ $key + 1 }}</td>
                                        <td>{{$level->name}}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-primary" title="Editar">
                                                <i class="bi bi-pen"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-danger" title="Dar de baja">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                        

                                    </tr>

                                    @endforeach
                                    


                                </tbody>
                                

                            </table> 
                            

                        </div>
                        

                    </div>

                    
                </div>
            </div>
        </div>
@endsection
