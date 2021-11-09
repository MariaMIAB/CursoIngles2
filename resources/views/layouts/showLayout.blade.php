<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <head>
        <style>
          h4 {
            text-align: center;
          color: #0a2635;
          font-weight: normal;
          font-size: 24px;
          font-family: Arial;
          }
     </style>
     @yield('title')
    </head>
    <body>
        <style>
          .prin{
            margin: 10rem;
            padding: 10rem;
            border: 6px solid rgb(87, 187, 233);
            border-radius: 10px;
          }
          .sec{
            margin: 1rem;
            padding: 1rem;
          }
          p{
          text-align: center;
          color: #1883ba;
          font-weight: normal;
          font-size: 24px;
          font-family: Arial;
          }
          a{
            padding: 8px;
          }
        a:hover{
          text-decoration: none;
        }
        button{
          padding: 4.8px;
        }
        button:hover{
          color: #0016b0;
        }
        .boton_personalizado{
        text-decoration: none;
        font-family: sans-serif;
        font-weight: 650;
        font-size: large;
        color: #ffffff;
        background-color: #1883ba;
        border-radius: 6px;
        border: 2px solid #0016b0;
        cursor: pointer;
        }
        body{
        background: url(/imagen/fondo1.jpg);   
        margin: 2.5rem;
        padding: 2rem;
        }
       .botones {
          text-align: center;
          margin:auto;
          }
       </style>
       </body>
       @yield('content')
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       @yield('js')
       