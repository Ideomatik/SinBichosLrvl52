@extends('layouts.admin')
    @section('content')
    @include('alerts.success')

    {{link_to_route('usuario.create', $title ='Agregar Usuario','', $attributes = ['class'=>'btn  btn-primary'])}}
    <br> <br>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
 @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                {!! Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE']) !!}
                {{link_to_route('usuario.edit', $title ='Editar', $parameters = $user->id, $attributes = ['class'=>'btn  btn-primary left'])}}
                {!! Form::submit('Eliminar',['class'=>'btn btn-danger left']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
 @endforeach
        </tbody>
    </table>

{!! $users->render() !!}

        <br>
        <br>

@stop