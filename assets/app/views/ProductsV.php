<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
</head>
<body>
    <div class="cont">
        <div class="subcont">
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Añadir productos</a></li>
                </ul>
            </nav>
            <div class="table">
                <div class="search">
                    <a href=""><button class="searchbtn">Editar Producto</button></a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>Descripción</td>
                            <td>Precio</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($products as $product){
                                echo "<tr>";
                                echo "<td>";
                                echo $product['name'];                                echo $product['name'];
                                echo "</td>";
                                echo "<td>";
                                echo $product['description'];
                                echo "</td>";
                                echo "<td>";
                                echo $product['price'];
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>