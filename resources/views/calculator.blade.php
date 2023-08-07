@extends('layouts.header')
@section('header')
<div class="wrapper">
    <div class="longer" style="margin-left: 11px; margin-top: 15px;">


<h3>Калькулятор расчёта</h3>
    <p>Это калькулятор расчёта, здесь вы можете узнать сколько вам необходимо материалов для заполнения площади, а так же стоимость этих материалов</p>

<form action="{{route('calcV')}}" style="width: 80%;" method="get">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Ширина м.</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Ширина м." required name="width" pattern="\d+(\.\d{1})?">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Длинна м.</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Длина м." required name="length" pattern="\d+(\.\d{1})?">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Высота м.</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Высота м." name="height" required pattern="\d+(\.\d{1})?" >
        </div>
    </div>
    <div class="form-group row" style=" display: flex">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Марка бетона</label>
        <div class="col-sm-10">
        <select id="inputPassword3" name="price" class="form-control">
            @foreach($names as $item => $key)
                <option  value="{{$key->price}}">{{$key->nameProduct}}</option>
                    @endforeach

        </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Расчитать объём</button>
        </div>
    </div>
</form>
    </div>
</div>
@if(isset($v))
    Итого: {{$v}} м3.
    Примерная стоимость {{$priceV}} т.р
@endif

@endsection
