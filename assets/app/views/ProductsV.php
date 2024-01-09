<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/products.css">
    <title>Inventario</title>
</head>
<body>
    <div class="cont">
        <div class="subcont">
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Añadir.php">Añadir productos</a></li>
                </ul>
            </nav>
            <div class="table">
                <div class="search">
                    <a href="search.php" class="link"><button class="searchbtn">Editar Producto</button></a>
                </div>
                <h1>Productos disponibles</h1>
                <table>
                    <thead>
                        <tr>
                            <td class="title">Nombre</td>
                            <td class="title">Descripción</td>
                            <td class="title">Precio</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($products as $product){
                                echo "<tr>";
                                echo "<td>";
                                echo $product['name'];                            
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