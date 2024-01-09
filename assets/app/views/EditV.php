<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit.css">
    <title>Editar producto</title>
</head>
<body>
    <div class="cont">
        <div class="subcont">
            <nav>
                <ul>
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../inventory.php">Inventario</a></li>
                    <li><a href="../add.php">Añadir Producto</a></li>
                </ul>
            </nav>
            <div class="table">
                <h1>Edita el producto</h1>
                <table>
                    <thead>
                        <tr>
                            <td class="title">ID</td>
                            <td class="title">Nombre</td>
                            <td class="title">Descripcion</td>
                            <td class="title">Precio</td>
                            <td class="title">Actualizar</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($products as $product){
                        ?>
                        <form action="../controller/UpdateController.php" method="POST">
                            <tr>
                                <td><input class="data" type="text" name="id" value="<?php echo $product['id'] ?>" readonly></td>
                                <td><input class="data" type="text" name="name" value="<?php echo $product['name'] ?>"></td>
                                <td><input class="data" type="text" name="description" value="<?php echo $product['description'] ?>">,</td>
                                <td><input class="data" type="text" name="price" value="<?php echo $product['price'] ?>">,</td>
                                <td class="dataU"><button class="update" type="submit" value="Editar">Actualizar Producto</button></td>
                            </tr>
                        </form>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>