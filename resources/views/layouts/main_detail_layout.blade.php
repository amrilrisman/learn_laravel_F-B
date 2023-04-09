<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/common.css">

    <link rel="stylesheet" href="css/common.css">
    <style>
      a{
        text-decoration: none;
        color: white;
      }

      a:hover {
        color: white;
        background-color: blue;
        
      }

      button {
        border-radius:  8px;
        border: none;
        color: white;
        background-color: rgb(14, 14, 97);
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 6px;
        padding-bottom: 6px;
      }
      
      button:hover{
        color: white;
        background-color: blue;
      }
    </style>
    <title>
        @yield("title")
    </title>
  </head>
  
  <body>
    
      <div class="container mt-8px">
        @yield('body')
      </div>

  </body>
</html>