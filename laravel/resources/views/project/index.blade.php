<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Index Blade</title>
</head>
<body>
<h2 class="my-3 pl-3 text-gray-800 text-2xl underline">Варіант-5</h2>
<table class="border-collapse border border-slate-400 border-spacing-2 table-auto ml-3">
    <tr>
        <td class="border border-slate-300">Username</td>
        <td class="border border-slate-300 px-4">Price</td>
        <td class="border border-slate-300 px-4">mark 1</td>
        <td class="border border-slate-300 px-4">mark 2</td>
        <td class="border border-slate-300 px-4">mark 3</td>
        <td class="border border-slate-300 px-4"></td>
        <td class="border border-slate-300 px-4"></td>
        <td class="border border-slate-300 px-4"></td>
    </tr>
    @foreach($projects as $project)
        <tr>
            <td>{{$project->username}}</td>
            <td class="px-4">{{$project->price}} ₴</td>
            <td class="px-4">{{$project->mark_1}}</td>
            <td class="px-4">{{$project->mark_2}}</td>
            <td class="px-4">{{$project->mark_3}}</td>
            <td class="px-4 hover:bg-gray-100 hover:underline hover:cursor-pointer"><a href="/project/{{$project->id}}">Показати</a></td>
            <td class="px-4 hover:bg-gray-100 hover:underline hover:cursor-pointer"><a href="/project/{{$project->id}}/edit">Редагувати</a>
            </td>
            <td class="px-4 hover:bg-gray-100 hover:underline hover:cursor-pointer"><a
                    onclick="event.preventDefault(); document.getElementById('delete-form-{{$project->id}}').submit();">Видалити
                    <form id="delete-form-{{$project->id}}" action="/project/{{$project->id}}" method="POST"
                          style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </a></td>
        </tr>
    @endforeach
</table>
<button class="mt-5 ml-3 hover:underline border py-2 px-5 border-gray-500 rounded hover:bg-gray-300"><a
        href="/project/create">Create</a></button>

</div>
</body>
</html>
