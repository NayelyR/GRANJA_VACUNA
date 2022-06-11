<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Granja Vacuna</title>
    <link rel="stylesheet" type="text/css" href="resources\css\granja.css">
    <style>
        body{

        }
        h1{
            font-size: 70px;
            position: relative;
            top:0;
            bottom: 0;
            top: 0;
            left:500px;
        }
        h2{
            font-size: 50px;
        }
        label{
            position: relative;
            font-size: 40px;
        }
        input{
            position: relative;
            font-size: 40px;
        }
        button{
            font-size: 40px;
            position: relative;
            top:0;
            bottom: 0;
            top: 0;
            left:100px;
        }
        img{
            position: absolute;
        }
    </style>
</head>
<body>
    <h1>GRANJA VACUNA</h1>
    <h2>Registro de vacas</h2>
    <form >
        <br>
        <label for="Codigo">Codigo:  </label>
        <input type="text" placeholder="Codigo">
        <br><br>
        <label for="Nombre">Nombre:  </label>
        <input type="text" placeholder="Nombre">
        <br><br>
        <label for="Raza">Raza:  </label>
        <input type="text" placeholder="Raza">
        <br><br>
        <label for="Sexo">Sexo:  </label>
        <input type="text" placeholder="Sexo">
        <br><br>
        <button type="submit">Cancelar</button>
        <button type="submit">Registrar</button>
    </form>

</body>
</html>
