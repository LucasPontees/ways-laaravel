@extends('master')

@section('content')

<h2>Usuário -  {{$user->firstName}} {{$user->lastName}} | {{$user->email}}</h2>

<form action="{{route('users.destroy', ['user'=> $user->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="delete">
    <button type="submit">deletar</button>
    <button><a href="{{route('users.index')}}">Voltar</a></button>
</form>

@endsection
