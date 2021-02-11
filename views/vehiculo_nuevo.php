
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $datos["titulo"];?> - CRUD</title>
</head>
<body>
    <h2>Agregar <?= $datos["titulo"];?></h2>

    <main class="contenido">
        <form action="?controller=vehiculos&page=guardarvehiculo" id="nuevo" name="nuevo" method="post" autocomplete="off">
            <p>
                Placa: <input type="text" name="placa" id="placa">
            </p>
            <p>
                Marca: <input type="text" name="marca" id="marca">
            </p>
            <p>
                Modelo: <input type="text" name="modelo" id="modelo">
            </p>
            <p>
                Año: <input type="number" name="fecha" id="fecha">
            </p>
            <p>
                Color: <input type="text" name="color" id="color">
            </p>
            <input type="submit" value="Guardar" name="guardar">
        </form>
        <br>
        <button><a href="/MVC-CRUD">Cancelar</a></button>
    </main>
</body>
</html>