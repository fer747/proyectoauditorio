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
                            <input type="email" name="email" class="form-control" readonly value="{{old('email',$user->email)}}">

                        </div>

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control">{{old('nombre',$user->name)}}</textarea>

                        </div>

                        <div class="form-group">
                            <label for="contraseña">Contraseña</label>
                            <input type="text" name="contraseña" class="form-control">{{old('contraseña')}}</textarea>

                        </div>
                        <p></p>
                        <div class="form-group">  
                            <button class="btn btn-primary">Guardar Usuario </button>
                            
                        </div>
                        
                    </form>
                    <p></p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Proyecto</th>
                                <th>Nivel</th>
                                <th>Opciones</th>
                                

                            </tr>
                            

                        </thead>
                        <tbody>
                            <tr>
                                <td>Proyecto A</td>
                                <td>N1</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary" title="Editar">
                                        <i class="bi bi-pen"></i>
                                    </a>
                                    <a href="" class="btn btn-sm btn-danger" title="Dar de baja">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                                

                            </tr>
                            


                        </tbody>
                        

                    </table>
                </div>
            </div>
        </div>
@endsection
