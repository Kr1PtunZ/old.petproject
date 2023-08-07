<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<h3><a href="{{route('adminPanel')}}">Назад</a></h3>
<div class="insForm">

    <form action="{{route('uploadFile')}}" method="get" enctype="multipart/form-data" class="formL">

        <input class="form-element" type="text" name="name" required placeholder="Имя">

        <input type="text" name="desc" class="form-element" required placeholder="Описание товара">

        <input type="number" name="cost" class="form-element" required placeholder="Стоимость">

        <input type="file" name="img" class="form-element" required>

        <select class="form-control form-control-sm" name="category" id="category">
            <option value="Бетон" name="Бетон">Бетон</option>
            <option value="Плитка" name="Плитка">Плитка</option>
            <option value="Кирпичи" name="Кирпичи">Кирпичи</option>
            <option value="Другое" name="Другое">Блоки ФБС</option>
        </select>

        <select class="form-control form-control-sm" name="measure" id="measure">
            <option value="м3" name="Бетон">м3</option>
            <option value="м2" name="Плитка">м2</option>
            <option value="Шт" name="Кирпичи">Шт</option>
        </select>
        <input type="submit">

    </form>


</div>
<style>
    .formL{
        width: 10%;
        padding-left: 30px;
    }
    .form-element{
        margin-bottom: 15px;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
