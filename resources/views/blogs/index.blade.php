<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if (Auth::check())
        
        <div>
            <a href="/blog/create">
                create blog
            </a>
        </div>
        
    @endif

    <h2>My Blog Titles</h2>
    <div>
        @foreach ($blogs as $blogs)
            <div>{{ $blogs->content }} <span>{{ date('jS M Y', strtotime($blogs->updated_at)) }}</span> </div>
            <div>{{ $blogs->user->name }}</div>
        @endforeach
    </div>
</body>
</html>