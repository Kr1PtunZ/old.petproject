<form action="{{route('redUpd')}}" method="get" enctype="multipart/form-data">

    <input type="text" name="name" required placeholder="Имя">

    <input type="text" name="desc" required placeholder="Описание товара">

    <input type="number" name="cost" required placeholder="Стоимость">


    <input name="filter" type="checkbox" value="Бетон" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Бетон</label>
    <input name="filter" type="checkbox" class="form-check-input" value="Кирпичи" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Кирпичи</label>
    <input name="filter" type="checkbox" value="Другое" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Другое</label>

    <input type="hidden" value="{{$card_id}}" name="card_id">
    <input type="submit">

</form>
