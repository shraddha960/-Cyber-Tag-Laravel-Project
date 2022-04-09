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
    </style>
</head>
<body>
    <h1 class="textalign">All Comments</h1>
    <h1>{{ $comments->comment }}</h1>
    <div>
    </div>
</body>
</html>