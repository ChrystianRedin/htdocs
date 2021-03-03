
<h1>{{$modo}} Cita</h1>

@if(count($errors)>0)

    <div class="alert alert-warning" role='alert'>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        
        </ul>
    </div>

   

@endif

<div class='form-group'>
<label for="APaterno">Apellido Paterno:</label>
<input class='form-control' type="text" name="APaterno" id="APaterno" value='{{isset($cita->APaterno)?$cita->APaterno:old("APaterno")}}'>
</div>


<div class='form-group'>
    <label for="AMaterno">Apellido Materno:</label>
    <input class='form-control' type="text" name="AMaterno" id="AMaterno" value='{{isset($cita->AMaterno)?$cita->AMaterno:old("AMaterno")}}'>
</div>

<div class='form-group'>
    <label for="Nombre">Nombre:</label>
    <input class='form-control' type="text" name="Nombre" id="Nombre" value='{{isset($cita->Nombre)?$cita->Nombre:old("Nombre")}}'>
</div>

<div class='form-group'>
    <label for="FechaCita">Cita:</label>
    <input class='form-control' type="datetime" name="FechaCita" id="FechaCita" value='{{isset($cita->FechaCita)?$cita->FechaCita:old("FechaCita")}}'>
</div>

<div class='form-group'>
    <label for="Id_Doctor">Doctor:</label>
    <input class='form-control' type="text" name="Id_Doctor" id="Id_Doctor" value='{{isset($cita->Id_Doctor)?$cita->Id_Doctor:old("Id_Doctor")}}'>
</div>

<div class='form-group'>
    <label for="Id_Departamento">Departamento:</label>
    <input class='form-control' type="text" name="Id_Departamento" id="Id_Departamento" value='{{isset($cita->Id_Departamento)?$cita->Id_Departamento:old("Id_Departamento")}}'>
</div>

<hr>

<input type="submit" value="{{$modo}} Cita" class='btn btn-info'>
<a href="{{url('citas/')}}" class='btn btn-secondary'>Regresar</a>