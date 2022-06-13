@extends('layouts.base')
@section('title', 'Lista')
@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="cold-md-11">
                <h1 class="text-center mb-5">
                    <i class="fa fa-users"> Lista de empleados</i>
                </h1>

                <a class="btn btn-success mb-4" href="{{url('/formEmp')}}">
                    <i class="fas fa-user-plus"> Agregar empleado</i>
                </a>



                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Codigo Empleado</th>
                        <th scope="col">Nombre Empleado</th>
                        <th scope="col">Télefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>

                    <tbody class="table-group-divider">

                    @foreach($emp as $emps)



                        <tr>
                            <td>{{$emps->codigo_empleado}}</td>
                            <td>{{$emps->nombre_empleado}}</td>
                            <td>{{$emps->numero_telefono}}</td>
                            <td>{{$emps->correo}}</td>
                            <td>{{$emps->direccion}}</td>
                            <td>{{$emps->departamento}}</td>
                            <td>

                                <div class="btn-group">

                                    <a href="{{ route('editformEmp', $emps->codigo_empleado) }}" class="btn btn-primary mb-3 mr-2">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <form action="{{ route('deleteEmp', $emps->codigo_empleado)}}"method="POST" class="Alert-eliminar">
                                        @csrf @method('DELETE')

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash-alt">Borrar</i>
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>
            </div>


            {{ $emp->links() }}

        </div>
    </div>

    </div>

@endsection

@section('js')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('empleadosModificado')=='Modificado')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Registro Modificado',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif

    <!--Mensaje de Guardado-->
    @if(session('RegistroGuardado')=='Guardado')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Registro Guardado',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif


    <!--Mensaje de Eliminado-->
    @if(session('RegistroEliminado')=='Eliminado')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'se elimino el empleado exitosamente',
                'success'
            )
        </script>
    @endif
    <script>
        $('.Alert-eliminar').submit(function (e){
            e.preventDefault();

            Swal.fire({
                title: '¿Esta seguro que desea eliminar el empleado?',
                text: "Si presiona si se eliminara definitivamente",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>

    @if(session('alerta')=='ok')

        <script>
            Swal.fire({
                title: 'No se puede eliminar el empleado',
                text:'Este empleado no se puede borrar por la perdida de datos',
                width: 600,
                padding: '3em',
                color: '#050404',
                background: '#fff url(/images/trees.png)',
                backdrop: `#F82D23`
            })
        </script>
    @endif
@endsection
