<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Comment</title>
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
            margin-left: 520px;
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

        .customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
            table-layout: center;
        }
        .demo {
            text-align: center;
            margin-top: 130px;
        }
    </style>
</head>
<body>
    <a class="buttonstyle" href="/dashboard">Dashboard</a>
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
    <h1 class="demo">Create Comment</h1>
    <div>
        <form action="/comment" method="POST" enctype="multipart/form-data">
            @csrf
            <textarea class="textareademo" rows="5" cols="40" type="text" name="comment" placeholder="Write Something..."></textarea>
            <button    
            type="submit"
            class="buttonstyle1">
            Submit Comment
        </button>
        </form>
    </div>
</body>
</html>