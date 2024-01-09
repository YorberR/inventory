<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/add.css">
    <title>Añadir producto</title>
</head>
<body>
    <div class="cont">
        <div class="subcont">
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="inventory.php">inventario</a></li>
                </ul>
            </nav>
            <div class="form">
                <form action="../app/controller/AddController.php" method="POST">
                    <h2 class="title">Ingresa los datos del producto</h2>
                    <input type="text" class="name" placeholder="Añade el nombre del producto" name="name">
                    <textarea type="text" class="description" name="description" placeholder="Añade la descripción"></textarea>
                    <input type="text" class="price" placeholder="Añade el precio" name="price">
                    <button class="data" type="submit" name="submit">Añadir producto al inventario</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>