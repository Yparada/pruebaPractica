<?php
    include('database.php');

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    if($nombre === ''){
        die('El campo nombre está vacio');
    }
    if($apellido === ''){
        die('El campo apellido está vacio');
    }

    $sql = "insert into persona(nombre, descripcion)
            values('$nombre', '$apellido') ";
    $resultado = mysqli_query($conexion, $sql);

    if(!$resultado){
        die('Error');
    }
    echo 'Agregado con exito';
