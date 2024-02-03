@extends('admin.layouts.app')

@section('tile', 'Usuários')

@section('content')

    @foreach ($users as $user )
        {{ $user->name }}
        <br>
    @endforeach


@endsection
