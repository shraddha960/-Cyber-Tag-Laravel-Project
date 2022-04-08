<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>{{ $blogs->content }}</h1>
    <div>
        <span>
            {{ $blogs->user->name }}
        </span>
        <span>{{ date('jS M Y', strtotime($blogs->updated_at)) }}</span>
    </div>
</body>
</html>