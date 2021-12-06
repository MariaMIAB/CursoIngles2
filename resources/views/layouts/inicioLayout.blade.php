<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <header class="header">
        <div>
       <nav class="navigation">
        <ul class="menu">
    <li><a href="home">Home</a></li> 
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
            <li><a href="usuario">usuarios</a></li>
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
    
        .header{
        background: #0c28a1;
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
            background: rgb(207, 42, 194);
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
          @import url(https://fonts.googleapis.com/css?family=Erica+One);
/* BODY */
body {
    padding: 15px;
            margin: 1rem;
            padding: 1rem;
            background: url(/imagen/fondo2.jpg);   

  background-color: pink;
 
  background-attachment: fixed;
  background-size: 100% 100%;
  overflow: hidden;
}
::selection {
  background: transparent;
}

h1 {
  cursor: default;
  position: absolute;
  top: 30px;
  left: 0;
  right: 0;
  bottom: 0;
  height: 100px;
  margin: auto;
  display: block;
  
  -webkit-animation: bounce .3s ease infinite alternate;
  
  font-family: 'Erica One', cursive;
  font-size: 80px;
  color: #FFF;
  text-align: center;
  line-height: 100px;
  text-shadow: 0 1px 0 #CCC,
               0 2px 0 #CCC,
               0 3px 0 #CCC,
               0 4px 0 #CCC,
               0 5px 0 #CCC,
               0 6px 0 transparent,
               0 7px 0 transparent,
               0 8px 0 transparent,
               0 9px 0 transparent,
               0 10px 10px rgba(0, 0, 0, .6);
}
/* ANIMATION */
@-webkit-keyframes bounce {
  100% {
    top: -30px;
    
    text-shadow: 0 1px 0 #CCC,
                 0 2px 0 #CCC,
                 0 3px 0 #CCC,
                 0 4px 0 #CCC,
                 0 5px 0 #CCC,
                 0 6px 0 #CCC,
                 0 7px 0 #CCC,
                 0 8px 0 #CCC,
                 0 9px 0 #CCC,
                 0 30px 30px rgba(0, 0, 0, .3);
  }
}
    </style>
</body>
</html>