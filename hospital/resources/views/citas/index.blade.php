@extends('layouts.app')

@section('content')
<div class="container">

        @if(Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible" role='alert'>
        {{Session::get('mensaje')}}
            <button type='button' class='close' data-dismiss='alert' arial-label='close'>
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif

      

   



    <a href="{{url('citas/create')}}" class='btn btn-info'>Nueva Cita</a>
    <p></p>
    <table class='table'>
        <thead class='thead-light'>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Cita</th>
                <th>Doctor</th>
                <th>Departamento</th>
                <th>Acciones</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach ($citas as $cita)

                <tr>
                        <td>{{$cita->id}}</td>
                        <td>{{$cita->Nombre}}</td>
                        <td>{{$cita->APaterno}}</td>
                        <td>{{$cita->AMaterno}}</td>
                        <td>{{$cita->FechaCita}}</td>
                        <td>{{$cita->Id_Doctor}}</td>
                        <td>{{$cita->Id_Departamento}}</td>
                        <td>
                            <a href="{{url('/citas/'.$cita->id.'/edit')}}" class='btn btn-secondary'>
                            Editar 
                            </a>
                        | 
                        
                        <form action="{{url('/citas/'.$cita->id)}}" method="post" class='d-inline'>
                            @csrf
                            {{method_field('DELETE')}}
                                <input type="submit" onclick="return confirm('¿Quieres Borrar?')" 
                                value="Borrar" class='btn btn-danger'>
                            </form>
                        </td>
                </tr>
                
            @endforeach
        
            
        </tbody>
    </table>
    {!! $citas->links() !!}
</div>
@endsection