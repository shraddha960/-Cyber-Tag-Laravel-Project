<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
    <div >
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1>Create Comment</h1>
    <div>
        <form action="/comment" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <input type="text" name="content" placeholder="Write Something..."> --}}
            <textarea type="text" name="comment" placeholder="Write Something..."></textarea>
            <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Comment
        </button>
        </form>
    </div>
</body>
</html>