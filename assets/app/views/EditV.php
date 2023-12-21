<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto</title>
</head>
<body>
    <div class="cont">
        <div class="subcont">
            <nav>
                <ul>
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../inventory.php">Inventario</a></li>
                    <li><a href="../Añadir.php">Añadir Producto</a></li>
                </ul>
            </nav>
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Descripcion</td>
                            <td>Precio</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($products as $product){
                        ?>
                        <form action="../controller/UpdateController.php" method="POST">
                            <tr>
                                <td><input type="text" name="id" value="<?php echo $product['id'] ?>" readonly></td>
                                <td><input type="text" name="name" value="<?php echo $product['name'] ?>"></td>
                                <td><input type="text" name="description" value="<?php echo $product['description'] ?>">,</td>
                                <td><input type="text" name="price" value="<?php echo $product['price'] ?>">,</td>
                                <td><button class="actualizar" type="submit" value="Editar">Actualizar Producto</button></td>
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