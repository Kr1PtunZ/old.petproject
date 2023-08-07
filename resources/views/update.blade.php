<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<h3><a href="{{route('adminPanel')}}">Назад</a></h3>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">Картинка</th>
            <th scope="col">Название</th>
            <th scope="col">Стоимость</th>
            <th scope="col">Описание</th>
            <th scope="col">Опция</th>

        </tr>
        </thead>
        @foreach($postsRed as $post => $key)
            <tbody>
            <tr>
                <td><img src="{{asset('storage').'/'.$key->img}}" alt="img" style="width: 80px;"></td>
                <td>{{($key->nameProduct)}}</td>
                <td>{{($key->price)}}</td>
                <td>{{($key->desc)}}</td>
                <td>
                    <form action="{{route('redact')}}" method="get">
                        <input type="hidden" value="{{$key->id}}" name="card_id">
                        <input class="btn btn-primary" type="submit" value="Изменить">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
