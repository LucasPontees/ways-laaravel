@extends('master')

@section('content')


    <h2>cadastrar</h2>

    @if(session()->has('message'))
    {{session()->get('message')}}
    @endif

    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <input type="text" name="firstName" placeholder="your firstname" required>
        <input type="text" name="lastName" placeholder="your lastname" required>
        <input type="email" name="email" placeholder="your email" required>
        <input type="password" name="password" placeholder="your password" required>
        <button type="submit">Cadastrar</button>
    </form>


@endsection
