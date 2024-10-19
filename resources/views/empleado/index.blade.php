<h1>CRUD CON LARAVEL</h1>
<p>Mostrar lista de empleados, tabla con todos los empleados
</p>
@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
<a href="{{url('empleado/create')}}">Registrar nuevo empleado</a>
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#ID</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>
                <img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" style="width: 100px; height:100px;">
            </td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Apellidos }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>
                <a href="{{url('/empleado/'.$empleado->id.'/edit')}}">Editar</a> |

                <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                    <!-- llave que se usara para la insercion y borrado de datos -->
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Borrar" onclick="return confirm('Deseas borrar el registro ?')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>