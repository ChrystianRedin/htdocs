Mostrar listado de citas
<table>
    <thead>
        <tr>#</tr>
        <tr>Nombre</tr>
        <tr>Apellido Paterno</tr>
        <tr>Apellido Materno</tr>
        <tr>Cita</tr>
        <tr>Doctor</tr>
        <tr>Departamento</tr>
        <tr>Acciones</tr>
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
                    <td>Editar | Borrar</td>
            </tr>
            
        @endforeach
       
        
    </tbody>
</table>