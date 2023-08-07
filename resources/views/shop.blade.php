@extends('layouts.header')
@section('header')
    <style>
        .product-holder{
            margin: auto;
            display: flex;
            justify-content: space-between;
            width: 50%;
            flex-wrap: wrap;
        }
        .product{
            text-align: center;
            padding: 15px;
            border-radius: 3px;
            margin-top: 50px;
            width: 175px;
        }
        img{
            margin-top: 15px;
            height: 100px;
            margin-bottom: 15px;
        }
        p{
            margin: 0;
        }
        .pagination{
            margin-left: 42%;
            margin-top: 1%;
            position: absolute;
        }
        .submBut{
            margin-top: 15px;
            border-radius: 3px;
            background-color: cornflowerblue; color: white;
            padding: 5px;
            transition: .3s;
        }
        .submBut:hover{
            background-color: #2563eb;
        }
        .cost{
            font-weight: 500; font-size: 12px; background-color: #a1bd60;
            cursor: default;
        }
    </style>
    <form action="{{route('filter')}}" method="post" style="width: 15%;position: absolute;margin-left: 50px;margin-top: 50px;">
        @csrf
        <div class="form-check" style="margin-left: 10px">
            <input name="filter[]" type="checkbox" value="Бетон" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Бетон</label>
        </div>
        <div class="form-check" style="margin-left: 10px">
            <input name="filter[]" type="checkbox" class="form-check-input" value="Блоки ФБС" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Блоки ФБС</label>
        </div>
        <div class="form-check" style="margin-left: 10px">
            <input name="filter[]" type="checkbox" value="Плитка тротуарная" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Плитка тротуарная</label>
        </div>
        <div class="form-check" style="margin-left: 10px">
            <input name="filter[]" type="checkbox" value="Сваи" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Бетонные сваи</label>
        </div>
        <button type="submit" class="btn btn-outline-secondary" style="margin-left: 10px; margin-bottom: 10px; margin-top: 5px;">Фильтровать</button>
    </form>
{{--Вывод до фильтрации--}}
@if(isset($posts))
    <div class="product-holder">
@foreach ($posts as $post)
            <div class="product" style="margin: 10px;">
    <form action="{{route('cartTransit')}}" method="get" style="">
        @csrf

        <img src="{{asset('storage').'/'.$post->img}}" alt="ppp" width="150px">
            <p>{{$post->nameProduct}}</p>
            <hr>
            <p>{{$post->desc}}</p>
            <hr>
            <p class="cost"  > {{$post->price}} Рублей</p> <p>  за 1 {{$post->measure}}</p>


        <input  type="text" name="card_id"  value="{{$post->id}}" hidden>
        @if(Auth::user())
        <input type="submit" class="submBut" value="В корзину" id="addCart" onclick="alert('Товар успешно добавлен в корзину')">
        @endif
        <hr>
    </form>
    </div>
@endforeach
    </div>

    <div class="pagination">
        {{ $posts->links() }}
    </div>

@endif


{{--После фильтрации--}}
@if(isset($prods))
                <div class="product-holder" style="">
@foreach ($prods as $prods => $key[0])
    @foreach($key[0] as $keys)
    <div class="product" style="margin: 10px;">
            <form action="{{route('cartTransit')}}" method="get">
                @csrf
                <img src="{{asset('storage').'/'.$keys->img}}" alt="ppp" width="150px" style="">
                        <p>{{$keys->nameProduct}}</p>
                        <hr>
                        <p>{{$keys->desc}}</p>
                        <hr>
                        <p class="cost">{{$keys->price}}  Рублей</p> <p>за 1 {{$keys->measure}}</p>
                        <hr>

                <input  type="text" name="card_id"  value="{{$keys->id}}" hidden>
                @if(Auth::user())
                <input class="submBut" type="submit" value="В корзину" onclick="alert('Товар успешно добавлен в корзину')">
                @endif
            </form>
    </div>

@endforeach
                @endforeach
@endif
        </div>
    <footer style="background-color: #6b7280; margin-top: 20%;">
        <div class="wrapper">
            <div class="footer-main" style="display: flex; justify-content: space-between;">
                <div class="footer-element">
                    <p>01.06.2023 ЖБИ УФА</p>
                    <a href="{{route('adminPanel')}}" style="text-decoration:none; color: black"> Администраторам </a>
                </div>
                <div class="footer-element">
                    <p>г.Уфа ул.Кирова д.65</p>
                </div>
            </div>
        </div>
    </footer>
@endsection


