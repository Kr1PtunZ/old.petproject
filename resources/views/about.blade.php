@extends('layouts.header')
@section('header')
    <div class="wrapper">
<h3 style="margin-left: 15px"> Мы находимся здесь!</h3>
<div class="map">
    <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/172/ufa/search/%D1%83%D0%BA%D1%81%D0%B8%D0%B2%D1%82/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">уксивт в Уфе</a><a href="https://yandex.ru/maps/172/ufa/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Уфа</a><iframe src="https://yandex.ru/map-widget/v1/?from=tabbar&ll=55.950457%2C54.725463&mode=search&sll=55.950457%2C54.725461&source=serp_navig&text=%D1%83%D0%BA%D1%81%D0%B8%D0%B2%D1%82&z=14" width="800" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
</div>
    <style>
        .map{
            margin: auto;
            text-align: center;
            padding-bottom: 210px;
        }
    </style>
    </div>
    <footer style="background-color: #6b7280">
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
</html>
@endsection
