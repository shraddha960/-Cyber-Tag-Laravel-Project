<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #e2e8f0
        }
        .textalign {
            text-align: center;
            margin-top: 120px;
        }
        .buttonstyle1 {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 12px;
            margin-top: 50px;
            margin-left: 550px;
        }
        .buttonstyle {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 12px;
        }
        .textareademo {
            display: block;
            margin-left: auto;
            margin-right: auto;
            /* margin-top: 130px; */
       }
    </style>
</head>
<body>
    <a class="buttonstyle" href="/blog">Return to Blogs</a>
    @if ($errors->any())
    <div >
        <ul>
            @foreach ($errors->all() as $error)
                <li class="buttonstyle">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1 class="textalign">Create Blog</h1>
    <div>
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf
            <textarea class="textareademo" rows="5" cols="40" type="text" name="content" placeholder="Write Something Interesting..."></textarea>
            <button    
            type="submit"
            class="buttonstyle1">
            Submit Post
        </button>
        </form>
    </div>
</body>
</html>