<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Create Blade</title>
</head>
<body>
<h2 class="my-4 pl-3 text-gray-800 font-semibold text-2xl underline">Створити проект</h2>
<form action="/project" method="post" class="pl-4 ">
    @csrf
    <label for="">
        Username
        <input name="username" type="text">
    </label>
    <br>
    <label for="">
        Price ₴
        <input name="price" type="number">
    </label>
    <br>
    <label for="">
        Mark 1
        <input name="mark_1" type="number" placeholder="1-ша оцінка" min="0" max="5">
    </label>
    <br>
    <label for="">
        Mark 2
        <input name="mark_2" type="number" placeholder="2-га оцінка" min="0" max="5">
    </label>
    <br>
    <label for="">
        Mark 3
        <input name="mark_3" type="number" placeholder="3-тя оцінка" min="0" max="5">
    </label>
    <br>
    <button type="submit" class="mt-5 ml-3 hover:underline border py-2 px-5 border-gray-500 rounded hover:bg-gray-300">Створити</button>
</form>
</body>
</html>
