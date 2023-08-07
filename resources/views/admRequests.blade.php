<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<h3><a href="{{route('adminPanel')}}">Назад</a></h3>

@if(isset($sum))
    @foreach($sum as $sums=>$key)

    <form action="{{'reqUpd'}}" method="get" style="width: 30%">
        @csrf
        <div class="req" style="">
        {{$key->name}}
        <p>Товары:</p>
            <input type="hidden" value="{{$key->id}}" name="postId">
            <input type="hidden" value="{{$key->idUser}}" name="userId">
    @foreach($posts as $post=>$key)
                <p>{{$key->nameProduct}}</p>
    @endforeach
        <p>{{$key->price}}</p></div>        <select class="form-select" aria-label="" name="status">
            <option selected>{{$key->status}}</option>
            <option value="Одобрена" name="status">Одобрен</option>
            <option value="Отложена" name="status">Отложен</option>
            <option value="Отменена" name="status">Отменен</option>
        </select>



        <input type="submit" value="Подтвердить">
    </form>
        @endforeach


        <style>
            .req{
                border: 1px solid black;
                margin-bottom: 15px;
                border-radius: 15px;
                padding: 15px;
                }
        </style>
        @endif
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
