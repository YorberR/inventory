<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/search.css">
    <title>Busqueda</title>
</head>
<body>
    <div class="cont">
        <div class="subcont">
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="inventory.php">Inventario</a></li>
                </ul>
            </nav>
            <div class="header">
                <header>
                    <div class="shadow">
                        <div class="title">
                            <h1>Busca el producto que quieres editar</h1>
                        </div>
                        <div class="searcher">
                            <form action="controller/productController.php" method="POST">
                                <input type="text" name="search">
                                <button class="search" type="submit">Buscar producto</button>
                            </form>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>
</body>
</html>