@extends('master')

@section('content')
<hr>



<div class="card card-body">
    <h2>Usuários cadastrados</h2>
    <ul>
        @foreach ($users as $user)

         <li class="p-1">{{$user->firstName}} |
         <a href="{{ route('users.edit', ['user'=> $user->id]) }}" id="buttonPadrao" class="btn btn-primary text-light">Editar</a> |
         <a href="{{ route('users.show',['user'=> $user->id])}}" id="buttonPadrao" class="btn btn-info text-light">Informações</a></li>


        @endforeach
    </ul>
   <div class="bg-secondary d-flex justify-content-end p-2">
    <a href="{{route('users.create')}}" id="buttonPadrao" class="btn btn-success text-light">Criar Usuários</a>
   </div>
</div>


@endsection
