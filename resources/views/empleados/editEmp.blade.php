@extends('layouts.base') <!--para heredar de base-->
@section('title', 'Editar') <!--nombre pagina, nombre de seccion-->
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5">



                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>

                    </div>
                @endif

                <div class="card border-primary">
                    <div class="card border-primary">
                        <form action="{{ route('editEmpleado', $emp->codigo_empleado)}}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PATCH')


                            <div class="card-header border-primary text-center text-white" style="background-color: #21618C;" >MODIFICAR EMPLEADO</div>

                            <div class="card-body" style="background-color: #cbd5e0;">

                                <div class="row form-group">
                                    <label for="" class="col-2">Nombre</label>
                                    <input type="text" name="nombre_empleado" class="form-control col-md-9" value="{{$emp->nombre_empleado}}">
                                </div>
                                <div class="row form-group">
                                    <label for="" class="col-2">Télefono</label>
                                    <input type="text" name="numero_telefono" class="form-control col-md-9" value="{{$emp->numero_telefono}}">
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-2">Correo</label>
                                    <input type="text" name="correo" class="form-control col-md-9" value="{{$emp->correo}}">
                                </div>
                                <div class="row form-group">
                                    <label for="" class="col-2">Dirección</label>
                                    <input type="text" name="direccion" class="form-control col-md-9" value="{{$emp->direccion}}">
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-2">Departamento</label>
                                    <input type="text" name="departamento" class="form-control col-md-9" value="{{$emp->departamento}}">
                                </div>

                                <div class="row form-group">
                                    <button type="submit" class="btn btn-primary text-dark col-md-9 offset-2 mb-2" style="background-color: #5499C7;">
                                        <i class="fas fa-undo"> Modificar</i>
                                    </button>

                                    <a class="btn btn-outline-secondary col-md-9 offset-2 text-dark" href="{{url('/listaEmp')}}" role="button">
                                        <i class="far fa-hand-point-left"> Regresar</i>
                                    </a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
