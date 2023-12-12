<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Blade</title>
</head>
<body>
<h2>Створити проект</h2>
<form action="/project" method="post">
    @csrf
    <label for="">
        Username
        <input name="username" type="text">
    </label>
    <label for="">
        Price ₴
        <input name="price" type="number">
    </label>
    <label for="">
        Mark 1
        <input name="mark_1" type="number" placeholder="1-ша оцінка" min="0" max="5">
    </label>
    <label for="">
        Mark 2
        <input name="mark_2" type="number" placeholder="2-га оцінка" min="0" max="5">
    </label>
    <label for="">
        Mark 3
        <input name="mark_3" type="number" placeholder="3-тя оцінка" min="0" max="5">
    </label>
    <button type="submit">Створити</button>
</form>
</body>
</html>
