@extends('layout')

@section('title','Categorias')

@section('content')

<h2>Listado de Categorías</h2>

<br>

<a href="{{ route('categorias.create') }}"
   class="btn btn-success">
    Nuevo
</a>

<br><br>

@if(session('type'))

<div class="alert alert-{{ session('type') }}">
    {{ session('message') }}
</div>

@endif

<table class="table table-bordered">

    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </tr>

    @foreach($datos as $categoria)

    <tr>

        <td>{{ $categoria->nombre }}</td>

        <td>{{ $categoria->descripcion }}</td>

        <td>

            <a href="{{ route('categorias.edit',$categoria->id) }}"
               class="btn btn-warning btn-sm">

                Editar

            </a>

            <form
                action="{{ route('categorias.destroy',$categoria->id) }}"
                method="POST"
                style="display:inline">

                @csrf
                @method('DELETE')

                <button
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('¿Eliminar registro?')">

                    Eliminar

                </button>

            </form>

        </td>

    </tr>

    @endforeach

</table>

@endsection