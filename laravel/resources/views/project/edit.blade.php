<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit blade</title>
</head>
<body>
<h2>Редагування проекту №{{$project->id}}</h2>
<form action="/project/{{$project->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put"/>
    <label for="">
        Username
        <input name="username" type="text" value="{{$project->username}}">
    </label>
    <label for="">
        Price ₴
        <input name="price" type="number" value="{{$project->price}}">
    </label>
    <label for="">
        Mark 1
        <input name="mark_1" type="number" min="1" max="5" value="{{$project->mark_1}}">
    </label>
    <label for="">
        Mark 2
        <input name="mark_2" type="number" min="1" max="5" value="{{$project->mark_2}}">
    </label>
    <label for="">
        Mark 3
        <input name="mark_3" type="number" min="1" max="5" value="{{$project->mark_3}}">
    </label>
    <button type="submit">Зберегти</button>
</form>
</body>
</html>
