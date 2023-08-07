@extends('layouts.header')
@section('header')
<h3 style="text-align: center">Корзина</h3>
<div class="wrapper">
@if(isset($cartPosts))

        <form action="{{route('reqAccept')}}">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Описание</th>
            <th scope="col">Стоимость</th>
            <th scope="col">Ед. изм.</th>
            <th scope="col">Количество</th>
            <th scope="col">Опция</th>

        </tr>
        </thead>
        @foreach($cartPosts as $cartPost => $key)
            <tbody>
            <tr>
                <td>{{($key->nameProduct)}}</td>
                <td>{{($key->desc)}}</td>
                <td>{{($key->price)}}</td>
                <td>{{$measure= $key->measure}}</td>
                <td>{{$measure= $key->amount}}</td>
                <td>
                    <form action="{{route('cartDelete')}}" method="get">
                        <input type="hidden" value="{{$key->id_cart}}" name="card_id">
                        <input class="btn btn-primary" type="submit" value="Удалить">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <input class="btn btn-primary" type="submit" value="Оставить заявку">
    </form>
</div>
@endif
@endsection
