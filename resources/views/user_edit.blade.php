@extends('master')

@section('content')
<hr>




    <h2>Editar</h2>

    @if(session()->has('message'))
    {{session()->get('message')}}
    @endif
<div class="card card-body">
    <form action="{{route('users.update', ['user'=>$user->id])}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="firstName" value="{{ $user->firstName }}">
        <input type="text" name="lastName" value="{{ $user->lastName }}">
        <input type="text" name="email" value="{{ $user->email }}">
        <button type="submit" class="btn btn-success">Editar</button>
    </form>

</div>



@endsection

