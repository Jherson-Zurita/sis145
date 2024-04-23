<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Carreras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulario de Carreras</h2>
        <form action="guardar.php" method="post">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" required>
            
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" required>
            
            <label for="imagen">Imagen</label>
            <input type="text" name="imagen">
            
            <label for="url">URL</label>
            <input type="text" name="url">
            
            <label for="estado">Estado</label>
            <input type="text" name="estado">
            
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>
