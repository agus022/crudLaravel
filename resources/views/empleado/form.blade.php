<h1>{{$modo}} Empleado</h1>
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" id="Nombre" value="{{isset ($empleado->Nombre)?$empleado->Nombre:''}}">
<br>

<label for="Apellidos">Apellidos</label>
<input type="text" name="Apellidos" id="Apellidos" value="{{isset($empleado->Apellidos)?$empleado->Apellidos:''}}">
<br>

<label for="Correo">Correo</label>
<input type="text" name="Correo" id="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:''}}">
<br>

<label for="Foto">Foto</label>
<br>
@if(isset($empleado->Foto))
<img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" style="width: 100px; height:100px;">
@endif
<input type="file" name="Foto" id="Foto">
<br>
<input type="submit" value="{{$modo}} datos">
<a href="{{url('empleado/')}}">Regresar</a>