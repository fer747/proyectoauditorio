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
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" 
                            value="{{old('email')}}">

                        </div>

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control"
                            value="{{old('nombre')}}">

                        </div>

                        <div class="form-group">
                            <label for="contraseña">Contraseña</label>
                            <input type="text" name="contraseña" class="form-control"
                            value="{{old('contraseña')}}">

                        </div>
                        <p></p>
                        <div class="form-group">
                            <button class="btn btn-primary">Registrar Usuario </button>
                            
                        </div>
                        
                    </form>
                    <p></p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>E-mail</th>
                                <th>Nombre</th>
                                <th>Opciones</th>
                                

                            </tr>
                            

                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->email}}</td>
                                <td>{{$user->name}}</td>
                                <td>
                                    <a href="/usuario/{{$user->id}}" class="btn btn-sm btn-primary" title="Editar">
                                        <i class="bi bi-pen"></i>
                                    </a>
                                    <a href="/usuario/{{ $user ->id }}/eliminar" class="btn btn-sm btn-danger" title="Dar de baja">
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
@endsection
