<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comments</title>
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
        }
    </style>
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
        
        <div class="buttonstyle">
            <a href="/comment/create">
                create comment
            </a>
        </div>
        
    @endif
    <a class="buttonstyle" href="/dashboard">
        dashboard
    </a>

    <h2 class="textalign">My Comments</h2>
    <div>
        <table class="customers">
            @foreach ($comment as $comment)
            <tr>
                <th>
                    {{ $comment->comment }}
                </th>
                <th>
                    {{ $comment->user->name }}
                </th>
                <th>
                    {{ date('jS M Y', strtotime($comment->updated_at)) }}
                </th>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>