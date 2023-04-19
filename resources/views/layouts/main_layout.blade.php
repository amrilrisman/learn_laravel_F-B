<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/common.css">
    <title>Laravel Coba</title>
    <style>
        body {
            overflow: scroll;
        }

        button {
            background-color: blue;
            border: none;
            margin-bottom: 20px;
            color: white;
            padding-left: 16px;
            padding-right: 16px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 8px;
        }




        div.scrollmenu {
            overflow: scroll;
            white-space: nowrap;
        }

        div.scrollmenu a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }
    </style>
</head>

<body>

    @include('partials.nav_bar')

    <div class="container mt-8px">
        @yield('body')
    </div>

</body>

</html>
