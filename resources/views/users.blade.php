@extends('master')

@section('content')

<a href="{{route('users.create')}}">Criar Usuários</a>

<hr>

<h2>Usuários cadastrados</h2>

<ul>
    @foreach ($users as $user)

     <li>{{$user->firstName}} | <a href="{{ route('users.edit', ['user'=> $user->id]) }}">Editar</a> |
     <a href="{{ route('users.show',['user'=> $user->id])}}">Informações</a></li>

    @endforeach
</ul>

@endsection
