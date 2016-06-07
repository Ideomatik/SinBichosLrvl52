@extends('layouts.admin')

@section('content')

    @if (Session::has('message'))

        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>

    @endif

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
 @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{link_to_route('usuario.edit', $title ='Editar', $parameters = $user->id, $attributes = ['class'=>'btn  btn-primary'])}}</td>
        </tr>
 @endforeach
        </tbody>
    </table>


        <br>
        <br>

@stop