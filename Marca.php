
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Marca</title>
    <link rel="stylesheet" href="estilos/Marca2.css">
</head>
<body>
<header class="header">
        <div class="logo">
<!---->            <img src="res/logo.png" alt="Logo de la marca">
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="producto.php">Registrar Producto</a></li>
                <li><a href="consulta-Productos.php">Consultar Producto</a></li>
                <li><a href="RegistraUsuario.php">Registrar Usuario</a></li>
           </ul>            
        </nav>
        <a class="btn" href="cerrarSesion.php"><button>Cerrar Sesion</button></a>

<!---->        <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>

<!---->        <div id="mobile-menu" class="overlay">
<!---->            <a onclick="closeNav()" href="" class="close">&times;</a>
<!---->            <div class="overlay-content">
<!---->                <a href="#">Services</a>
<!---->                <a href="#">Projects</a>
<!---->                <a href="#">About</a>
<!---->                <a href="#">Contact</a>
<!---->            </div>
<!---->        </div>

    </header>
    <?php
            if (isset($_SESSION['user'])) {
            if ($_SESSION['rol'] == 1) {
             ?>
             <section class="contenedor"> 
    <h1>Registrar Marca</h1>
<article class="content-art1">
        <form action = "reg-marca.php" method = "post">
        <table>
            <tr>
                <td>
                    <label> CODIGO MARCA </label>
                </td>
                
                <td>
                    <input type = "text" name = "txtCat"require>
                </td>    
            </tr>

            <tr>
                <td>
                    <label> DESCRIPCION </label>
                </td>
                
                <td>
                    <input type = "text" name = "txtdescripcion">
                </td>    
            </tr>

            <tr>
                <td>
                    <button type = "reset"> CANCELAR </button>
                </td>
                
                <td>
                    <button type = "submit"> REGISTRAR </button>
                </td>  
            </tr>
        </table>
        </form>
        </article>
        </section>
        <br><br>
        <article class="content-art2">
        <table border="1" class="tablaCat">
        <tr>
            <th> NO. </th>
            <th> DESCRIPCION </th>
            <th> Editar</th>
            <th>Eliminar</th>
        </tr>

         <?php

        include("conexion/conexion.php");
        $consulta = "SELECT * FROM marca";
        #EJECUTAR LA CONSULTA
        $areas = mysqli_query($conexion, $consulta);
        #EXTRAER LOS DATOS DE LA CONSULTA
        while($regMarca = mysqli_fetch_assoc($areas)){
        echo "<tr>".
              "<td>".$regMarca["idMarca"] . "</td>".
              "<td>".$regMarca["descripcionmarca"] . "</td>".
              "<td><a href='modificar-mar.php?id=".$regMarca["idMarca"]."' title='Editar'><img src='img/recursos/actualiza.png' width='30' height='30'></a></td>".
              "<td><a href='' title='Eliminar'><img src='img/recursos/elimina.png' width='30' height='30'></a></td>".
              "</tr>";
            }
           ?>

        </table>
    </article>
</section>
</body>
</html>
<?php
    } else {
        echo "No tienes privilegios para ingresar al sitio, solo administradores.";
    }
} else {
    echo "Para ingresar debes <a href='index.php'>iniciar sesión</a>";
}
?>
