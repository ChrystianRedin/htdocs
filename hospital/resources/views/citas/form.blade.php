
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
    <input class='form-control' type="datetime-local" name="FechaCita" id="FechaCita" value='{{isset($cita->FechaCita)? date("Y-m-d\TH:i", strtotime($cita->FechaCita)) : date("Y-m-d\TH:i", strtotime(old("FechaCita")))}}'>
</div>

<div class='form-group'>
    <label for="Id_Doctor">Doctor:</label>
    <select class='form-control' name="Id_Doctor" id="Id_Doctor" value='{{isset($cita->Id_Doctor)?$cita->Id_Doctor:old("Id_Doctor")}}'>
        <option value="" disabled selected>Selecciona una opcion:</option>
        <option value="1" {{isset($cita->Id_Doctor)?$cita->Id_Doctor =='1' ? 'selected' : '' : ''}}>Dr. ENRIQUE MARTINEZ</option>
        <option value="2" {{isset($cita->Id_Doctor)?$cita->Id_Doctor =='2' ? 'selected' : '': ''}}>Dr. ALBERTO MANRIQUEZ</option>
        <option value="3" {{isset($cita->Id_Doctor)?$cita->Id_Doctor =='3' ? 'selected' : '': ''}}>Dra. LAURA ASCENCIO</option>
        <option value="4" {{isset($cita->Id_Doctor)?$cita->Id_Doctor =='4' ? 'selected' : '': ''}}>Dr. EDUARDO LOPEZ</option>
        <option value="5" {{isset($cita->Id_Doctor)?$cita->Id_Doctor =='5' ? 'selected' : '': ''}}>Dra. ANGELICA RODRIGUEZ</option>
    </select>
</div>

<div class='form-group'>
    <label for="Id_Departamento">Departamento:</label>
    <select class='form-control' name="Id_Departamento" id="Id_Departamento" value='{{isset($cita->Id_Departamento)?$cita->Id_Departamento:old("Id_Departamento")}}'>
        <option value="" disabled selected>Selecciona una opcion:</option>
        <option value="1" {{isset($cita->Id_Departamento)?$cita->Id_Departamento =='1' ? 'selected' : '': ''}}>GINECOLOGÍA Y OBSTETRICIA</option>
        <option value="2" {{isset($cita->Id_Departamento)?$cita->Id_Departamento =='2' ? 'selected' : '': ''}}>LABORATORIOS CLÍNICOS</option>
        <option value="3" {{isset($cita->Id_Departamento)?$cita->Id_Departamento =='3' ? 'selected' : '': ''}}>MEDICINA PREVENTIVA</option>
        <option value="4" {{isset($cita->Id_Departamento)?$cita->Id_Departamento =='4' ? 'selected' : '': ''}}>REHABILITACIÓN</option>
    </select>
</div>

<hr>

<input type="submit" value="{{$modo}} Cita" class='btn btn-info'>
<a href="{{url('citas/')}}" class='btn btn-secondary'>Regresar</a>