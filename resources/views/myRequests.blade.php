@extends('layouts.header')

@section('header')
    @if(isset($reqs))
    <h3>Мои заказы</h3>
    @foreach($reqs as $req=>$key)
        <form action="{{route('cancelReq')}}" method="get">
            @switch($key->status)
                @case($key->status = 'Одобрена')
            <p style="background-color: limegreen">{{$key->status}}</p>
                    @break
                        @case($key->status = 'В обработке')
                    <p style="background-color: yellow">{{$key->status}}</p>
                    @break
                @case($key->status = 'Отложен')
                        <p style="background-color: gray">{{$key->status}}</p>
                @break
            @endswitch
            <p>Заявка от {{$key->created_at}}</p>
            <p>{{$key->nameProduct}}</p>
            <input type="hidden" value="{{$key->idR}}" name="reqId">
            <input type="submit" value="Отменить заявку">
        </form>
    @endforeach
    @else
        <p>У вас нет активных заказов</p>
    @endif

@endsection
