<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="/blog/{{ $blog->id }}" method="POST">
            
            @method('PUT')

            @csrf

            <div>
                <label for="content">Content: </label>
                <input name="content" id="content" value="{{ $blog->content }}">
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>