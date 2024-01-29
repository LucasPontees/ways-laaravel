@extends('master')

@section('content')
<hr>

<h2>Usuário -  {{$user->firstName}} {{$user->lastName}} | {{$user->email}}</h2>

<form action="{{route('users.destroy', ['user'=> $user->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="delete">
    <button type="submit" class="btn btn-danger">deletar</button>
    <a href="{{route('users.index')}}" class="btn btn-warning">Voltar</a>
</form>

@endsection
