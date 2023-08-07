@extends('layouts.header')
@section('header')
<h2>Оформление заказа</h2>
<Form action="{{route('reqInsert')}}" method="get">

<table class="table">
    <thead>
    <tr>
        <th scope="col">Название</th>
        <th scope="col">Описание</th>
        <th scope="col">Стоимость</th>
        <th scope="col">Ед. изм.</th>

    </tr>
    </thead>
    @foreach($cartPosts as $cartPost => $key)
    <tbody>
    <tr>
        <td>{{($key->nameProduct)}}</td>
        <td>{{($key->desc)}}</td>
        <td>{{($key->price)}}</td>
        <td>{{$measure= $key->measure}}</td>


    </tr>
    @endforeach
</table>

    <input class="btn btn-primary" type="submit" value="Оставить заявку">
</Form>
@endsection
