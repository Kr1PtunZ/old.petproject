@extends('layouts.header')
@section('header')
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Профиль') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">



                </div>
            </div>
        </div>
    </div>
<div class="myRequests" style="text-align: center">
    <a href="{{route('myRequests')}}">Мои заказы</a>
</div>
<div class="exit" style="text-align: center">
    <a style="color: red" href="{{route('logout')}}">Выйти из аккаунта</a>
</div>
@endsection
