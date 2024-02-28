<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание нового продукта</title>
</head>
<body>
<form action="{{ route('products.store') }}" method="POST">
<h2>Создание нового продукта</h2>
    @csrf
    <div>
        <label for="name">Название продукта:</label><br>
        <input type="text" id="name" name="name" required><br>
    </div>
    <div>
        <label for="price">Цена:</label><br>
        <input type="text" id="price" name="price" required><br>
    </div>
    <div>
        <label for="quantity">Количество:</label><br>
        <input type="number" id="quantity" name="quantity" required><br>
    </div>
    <br>
    <button type="submit">Создать продукт</button>
</form>
</body>
</html>
