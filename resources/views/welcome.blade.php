<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <!-- Подключите вашу CSS-стилизацию здесь -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Главная страница</h1>
    <a href="{{route('products.create')}}" class="btn">Добавить продукт</a> </br>
    <a href="{{route('paiges.index')}}" class="btn">Посмотреть список продуктов</a>
</div>
</body>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
</html>
