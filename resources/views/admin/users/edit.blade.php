@extends('admin.layouts.app')

@section('tile', 'Editando o Usuário')

@section('content')

    <h1 class="w-full text-3xl text-black pb-6">
        Editar o Usuário: {{ $user->name}}
    </h1>
    <div class="flex flex-wrap">
        <div class="w-full  my-6 pr-0 lg:pr-2">
            <div class="leading-loose">
                <form class="p-10 bg-white rounded shadow-xl" method="POST" action="{{route('users.update', $user->id)}}">
                   @csrf
                   @method('PUT')
                   @include('admin.users._partials.form')

                </form>
            </div>
        </div>
    </div>
@stop
