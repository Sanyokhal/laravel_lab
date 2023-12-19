<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Show blade</title>
</head>
<body>
<div class="pl-4 my-3 font-semibold flex flex-col gap-2">
    <h3>Проект № {{$project->id}}</h3>
    <h2>Назва користувача: {{$project->username}}</h2>
    <h2>Ціна проекту: {{$project->price}}₴</h2>
    <h2>Оцінки по 5 бальній шкалі: {{$project->mark_1}}, {{$project->mark_2}}, {{$project->mark_3}}</h2>
</div>
<a href="/project" class="mt-5 ml-3 hover:underline border py-2 px-5 border-gray-500 rounded hover:bg-gray-300">Назад</a>
</body>
</html>
