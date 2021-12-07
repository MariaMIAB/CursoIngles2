<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    @yield('title')
</head>
<body>
    @yield('content')
    <style>
        h1{
        -webkit-text-stroke: 2px rgb(223, 16, 154);
        color :white;
        font-size: 60px;
        }
        .boton_personalizado{
        text-decoration: none;
        font-family: sans-serif;
        font-weight: 800;
        font-size: large;
        color: #ffffff;
        background-color: #db44db;
        border-radius: 6px;
        border: 2px solid #0016b0;
        cursor: pointer;
        }
        a:hover{
          text-decoration: none;
        }
        button{
          padding: 4.8px;
        }
        button:hover{
          color: #163aaf;
        }
        .botones {
          margin:auto;
          }
 body{
    margin: 2%;
    padding: 2%;
    background: url(/imagen/fondo2.jpg);
    }
    </style>
</body>
</html>