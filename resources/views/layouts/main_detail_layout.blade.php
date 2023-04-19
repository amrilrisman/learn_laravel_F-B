<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        a {
            text-decoration: none;
            color: black;
        }

        button {
            border-radius: 8px;
            border: none;
            color: white;
            background-color: rgb(14, 14, 97);
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 6px;
            padding-bottom: 6px;
        }

        button:hover {
            color: white;
            background-color: blue;
        }

        article {
            background-color: rgb(18, 18, 111);
            color: white
            padding-left: 16px;
            padding-right: 16px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        article:hover {
            background-color: blue;
            /* margin-bottom: 20px;
  margin-top: 20px; */
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 25px;
            padding-bottom: 25px;
            transition-duration: 600ms;
            animation-fill-mode: forwards;
            color: whitesmoke;
        }
    </style>
    <title>
        @yield('title')
    </title>
</head>

<body>

    <div class="container mt-8px">
        @yield('body')
    </div>

</body>

</html>
