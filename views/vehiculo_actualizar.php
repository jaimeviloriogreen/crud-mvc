
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
        <form action="?controller=vehiculos&page=vehiculoactualizado" id="nuevo" name="actualizado" method="post" autocomplete="off">
            <p>
                Id: <input type="text" name="id" id="placa" value="<?= $datos['vehiculos']['id'] ??  NULL;?>">
            </p>
            <p>
                Placa: <input type="text" name="placa" id="placa" value="<?= $datos['vehiculos']['placa'] ?? NULL;?>">
            </p>
            <p>
                Marca: <input type="text" name="marca" id="marca" value="<?= $datos['vehiculos']['marca'] ?? NULL;?>">
            </p>
            <p>
                Modelo: <input type="text" name="modelo" id="modelo" value="<?= $datos['vehiculos']['modelo'] ?? NULL;?>">
            </p>
            <p>
                Año: <input type="text" name="fecha" id="fecha" value="<?= $datos['vehiculos']['fecha'] ?? NULL;?>">
            </p>
            <p>
                Color: <input type="text" name="color" id="color" value="<?= $datos['vehiculos']['color'] ?? NULL;?>">
            </p>
            <input type="submit" value="Guardar" name="guardar">
        </form>
        <br>
        <button><a href="/MVC-CRUD">Cancelar</a></button>
    </main>

</body>
</html>