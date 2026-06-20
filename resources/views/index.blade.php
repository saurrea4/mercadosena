@extends('layout')

@section('title', 'Saludo')

@section('content')
<div class="text-end">
    <a href="{{ url('categorias/create') }}" class="btn btn-primary">Nuevo</a>
</div>
    <h3>Bienvenidos a la aplicación de Mercado</h3>
@stop()
@section('js')

<script src="{{ url('js/jquery.validate.min.js') }}"></script>
<script src="{{ url('js/localization/messages_es.min.js') }}"></script>

<script>

    $("form").validate({
        rules: {

            nombre: {
                required: true,
                maxlength: 50
            },

            descripcion: {
                required: true,
                maxlength: 150
            }

        }
    });

</script>

@stop()