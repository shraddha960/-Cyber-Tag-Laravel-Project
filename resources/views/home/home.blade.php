<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #e2e8f0
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
        .textalign {
            text-align: center
        }
    </style>
</head>
<body>
    <a class="buttonstyle" href="/">Welcome Page</a>
    <h2 class="textalign">My Blog Content</h2>
    <div>
        <table class="customers">
            @foreach ($blogs as $blogs)
            <tr>
                <th>
                    {{ $blogs->content }} 
                </th>
                <th>
                    {{ $blogs->user->name }}
                </th>
                <th>
                    {{ date('jS M Y', strtotime($blogs->updated_at)) }}
                </th>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>