@extends('layouts.app')

@section('content')


        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="card-header">Reportar</div>

                <div class="card-body">

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
                            <label for="categoria">Categoría</label>
                            <select class="form-control" name="categoria">

                                <option value="">General</option>
                                @foreach($categorias as $categoria)


                                <option value = "{{$categoria -> id}}">{{$categoria->name}}</option>



                                @endforeach
                                

                            </select>


                        </div>


                        <div class="form-group">
                            <label for="prioridad">Prioridad</label>
                            <select class="form-control" name="prioridad">
                                <option value="M">Menor</option>
                                <option value="N">Normal</option>
                                <option value="A">Alta</option>
                                
                            </select>


                        </div>

                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}">

                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea name="descripcion" class="form-control">{{old('descripcion')}}</textarea>

                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Registrar Incidencias</button>
                            
                        </div>
                        


                    </form>
                </div>
            </div>
        </div>
@endsection
