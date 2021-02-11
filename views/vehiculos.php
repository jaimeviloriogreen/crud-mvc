
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $datos["titulo"];?> - CRUD</title>
</head>
<body>
    <h2><?= $datos["titulo"];?></h2>

    <main class="contenido">
    <button><a href="?controller=vehiculos&page=nuevovehiculo">Agregar</a></button>
    <br/><br>
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Año</th>
                    <th>Placa</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($datos["vehiculos"] as $vehiculos):?>
            <tr>
                <td><?= $vehiculos['id'];?></td>
                <td><?= $vehiculos['marca'];?></td>
                <td><?= $vehiculos['modelo'];?></td>
                <td><?= $vehiculos['color'];?></td>
                <td><?= $vehiculos['fecha'];?></td>
                <td><?= $vehiculos['placa'];?></td>
                <td><a href="?controller=vehiculos&page=actualizarvehiculo&id=<?= $vehiculos['id'];?>">Editar</a></td>
                <td><a href="?controller=vehiculos&page=eliminarvehiculo&id=<?= $vehiculos['id'];?>">Eliminar</a></td>
            </tr>
        <?php endforeach;?>
            </tbody>
        </table>
    </main>
</body>
</html>