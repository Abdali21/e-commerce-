@props(['header', 'title'])
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} | {{config("app.name")}}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-[60%] mx-auto">
        @if ($errors->any())
            <h2 class="m-4 text-2xl font-semibold">Errors</h2>
            <ul class="bg-red-100 p-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <h2 class="m-4 text-2xl font-semibold">{{$header}}</h2>
        <main>
            {{$slot}}
        </main>
    </div>
</body>

</html>