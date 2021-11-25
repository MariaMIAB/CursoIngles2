<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <header class="header">
        <div class="container logo-nav-container">
            <a href="#" class="logo">Logo</a>
       <nav class="navigation">
        <ul class="menu">
    <li><a href="inicio">Home</a></li> 
    <li><a href="acercade">aserca de</a></li>
    <li><a href="{{route('contactanos.index')}}">contactanos</a></li>
    <li><a href="#">listas de Contenido</a>
     <ul class="submenu">
             <li><a href="tema">temas</a></li>
             <li><a href="materia">materias</a></li>
             <li><a href="evaluacion">evaluaciones</a></li>
             <li><a href="cronograma">cronogramas</a></li>
           
             
     </ul>
    </li>
    <li><a href="#">listas de Usuarios </a>
        <ul class="submenu">
            <li><a href="user">usuarios</a></li>
            <li><a href="rol">roles</a></li>
            <li><a href="notas">notas</a></li>
            <li><a href="asistencia">asistencias</a></li> 
        </ul>
       </li>
     </ul>
    </nav>
    </div>
    </header>
</head>
<body>
    <style>
        div{
            padding: 15px;
        }
        body{
            padding: 15px;
        }
        .header{
        background: #007bff;
        color: white;
        padding: 1rem 0;
        font-size: 20px;
        }
        .header a {
            color: white;
            text-decoration: none;
            
        }
        .logo-nav-container{
            display: flex;
            justify-content: space-between;
            align-items: center;
            
        }
        .submenu{
            position: absolute;
            display: inline-block;
            background: black;
            border: 5px solid rgb(21, 23, 121);
            border-radius:10px;
            width: 85%;
            text-align: center;
            visibility: hidden;
            opacity: ;
            transition: opacity 0.4s;
            z-index: 999;
        }
         
        .submenu li a{
        display:block; 
        padding: 15px;
        color: white;
        }
        .menu li:hover .submenu{
            visibility: visible;
            opacity: 1;
        }
        .navigation ul{
        margin: 0;
        padding: 0;
        list-style: none;
        }
        .navigation ul li{
            display: inline-block;
            position: relative;
        }
        .navigation ul li a{
            display: block;
            padding: 0.5rem 1rem; 
            transition: all 0.4s linear;
            border-radius: 5px;
        }
        .navigation ul li a:hover{
            background: #1883ba;
        }
        .logo{
            letter-spacing: 10px;
            font-size: 1.2em;
        }
        .boton_personalizado{
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 20px;
            color: #ffffff;
            background-color: #007bff;
            border-radius: 6px;
            border: 2px solid #00299e;
          }
          .botones {
          text-align: left;
          margin:auto;
          cursor: pointer;
          }
          .boton_personalizado:hover{
          color: #1883ba;
          background-color: #ffffff;
         }
         h1{
        font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        font-size: 80px;
        padding: 50px 50px;
        text-align: center;
        margin-top: 100px;
        text-transform: uppercase;
        text-rendering: optimizeLegibility;
          }
    </style>
</body>
</html>