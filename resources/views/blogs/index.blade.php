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
            /* margin-top: 120px; */
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
        .buttonstyle1 {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 12px;
            margin-left: 590px;
        }
        .textareademo {
            display: block;
            margin-left: auto;
            margin-right: auto;
            /* margin-top: 130px; */
       }
       .customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 30%;
            margin-left: auto; 
            margin-right: auto;
        }

        .customers td, .customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .customers tr:nth-child(even){background-color: #f2f2f2;}

        .customers tr:hover {background-color: #ddd;}

        .customers thead {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
            table-layout: center;
        }
        .customers tbody {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: rgb(233, 245, 240);
            /* color: white; */
            table-layout: center;
        }
        .demo {
            text-align: center;
        }
    </style>
</head>
<body>
    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="buttonstyle">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if (Auth::check())
        
        <div>
            <a class="buttonstyle" href="/blog/create">
                create blog
            </a>
            <a class="buttonstyle" href="/dashboard">
                Dashboard
            </a>
        </div>
        
    @endif

    <h2 class="textalign">My Blog Content</h2>
    <div>
        <table class="customers">
            <thead>
                <tr>
                    <th>
                        Content
                    </th>
                    <th>
                        date
                    </th>
                    <th>
                        Username
                    </th>
                </tr>
                
            </thead>
            <tbody>
                @foreach ($blogs as $blogs)
                <tr>
                    <th>{{ $blogs->content }}</th>
                    <th>{{ date('jS M Y', strtotime($blogs->updated_at)) }}</th>
                    <th>{{ $blogs->user->name }}</th>
                </tr>
            </tbody>
            @endforeach
        </table>

        {{-- @foreach ($blogs as $blogs)
            <div class="demo"><b>Content:&nbsp;&nbsp;{{ $blogs->content }} <span>{{ date('jS M Y', strtotime($blogs->updated_at)) }}</span></b></div>
            <div class="demo"><b>User Name:&nbsp;&nbsp;{{ $blogs->user->name }}</b></div>
            @if ($blogs->id)
                <div >
                    <form action="/blogs/{{ $blogs->id }}/comment" method="POST" enctype="multipart/form-data">
                        @csrf
                        <textarea class="textareademo" name="comment" ></textarea>
                        <button class="buttonstyle1" type="submit" >Comment</button>
                        
                    </form>
                </div>
                @endif

        @endforeach --}}

        
        {{-- @if ($blogs->id)
            @foreach ($comment as $comment)
                <div>{{ $comment->comment }} <span>{{ date('jS M Y', strtotime($comment->updated_at)) }}</span> </div>
                <div>{{ $comment->user->name }}</div>
            @endforeach
        @endif --}}

            
    </div>
</body>
</html>