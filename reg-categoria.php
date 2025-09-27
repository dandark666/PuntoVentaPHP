<?php
    $clav = $_POST['txtCat'];
    $descrip = $_POST['txtdescripcion'];
//consulta 
   $cons = "INSERT categoria VALUES ('$clav', '$descrip');";
//conexion a bd 
    include("conexion/conexion.php");
    if(mysqli_query($conexion,$cons)){
        header("location:categoria.php");
    }else{
        echo"PROBLEMAS AL REGISTRAR EL BECARIO";
    }
    mysqli_close($conexion);
    ?>
