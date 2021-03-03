Formulario creacion cita

<form action="{{url('/citas')}}" method="post">
@csrf

<label for="APaterno">Apellido Paterno:</label><br>
<input type="text" name="APaterno" id="APaterno"><br>

<label for="AMaterno">Apellido Materno:</label><br>
<input type="text" name="AMaterno" id="AMaterno"><br>

<label for="Nombre">Nombre:</label><br>
<input type="text" name="Nombre" id="Nombre"><br>

<label for="FechaCita">Cita:</label><br>
<input type="date" name="FechaCita" id="FechaCita"><br>

<label for="Id_Doctor">Doctor:</label><br>
<input type="text" name="Id_Doctor" id="Id_Doctor"><br>

<label for="Id_Departamento">Departamento:</label><br>
<input type="text" name="Id_Departamento" id="Id_Departamento"><br>

<input type="submit" value="Guardar Cita">


</form>