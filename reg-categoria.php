<?php
    $clav = $_POST['txtCat'];
    $descrip = $_POST['txtdescripcion'];

   $cons = "INSERT categoria VALUES ('$clav', '$descrip');";

    include("conexion/conexion.php");
    if(mysqli_query($conexion,$cons)){
        header("location:categoria.php");
    }else{
        echo"PROBLEMAS AL REGISTRAR EL BECARIO";
    }
    mysqli_close($conexion);
    ?>
