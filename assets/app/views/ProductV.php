<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/product.css">
    <title>Producto</title>
</head>
<body>
    <div class="cont">
        <div class="subcont">
            <nav>
                <ul>
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../inventory.php">Inventario</a></li>
                    <li><a href="../add.php">Añadir producto</a></li>
                </ul>
            </nav>
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <td class="title">Nombre</td>
                            <td class="title">Descripcion</td>
                            <td class="title">Precio</td>
                            <td class="title">Editar</td>
                            <td class="title">Eliminar</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($products as $product){
                        ?>
                        <tr>
                            <td><?php echo $product['name'] ?></td>
                            <td><?php echo $product['description'] ?></td>
                            <td><?php echo $product['price'] ?></td>
                            <td class="cont-edit"><a class="edit" href="../controller/EditController.php?id=<?php echo $product['id'] ?>">Editar producto</a></td>
                            <td class="cont-delete"><a class="delete" href="../controller/DeleteController.php?id=<?php echo $product['id'] ?>">Eliminar producto</a></td>
                        </tr>
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