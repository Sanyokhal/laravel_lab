<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Blade</title>
</head>
<body>
<h2>Варіант-5</h2>
<table>
    <tr>
        <td>Username</td>
        <td>Price</td>
        <td>mark 1</td>
        <td>mark 2</td>
        <td>mark 3</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    @foreach($projects as $project)
        <tr>
            <td>{{$project->username}}</td>
            <td>{{$project->price}} ₴</td>
            <td>{{$project->mark_1}}</td>
            <td>{{$project->mark_2}}</td>
            <td>{{$project->mark_3}}</td>
            <td><a href="/project/{{$project->id}}">Показати</a></td>
            <td><a href="/project/{{$project->id}}/edit">Редагувати</a></td>
            <td><a onclick="event.preventDefault(); document.getElementById('delete-form-{{$project->id}}').submit();">Видалити
                    <form id="delete-form-{{$project->id}}" action="/project/{{$project->id}}" method="POST"
                          style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </a></td>
        </tr>
    @endforeach
</table>
<button><a href="/project/create">Create</a></button>

</div>
</body>
</html>
