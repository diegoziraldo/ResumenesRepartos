
<?php

    include('getClientes.php');


    
    $clientes = [];
    $zonas = ['Caba','Norte','Norte 2','Norte 3', 'Oeste','Oeste 2','Oeste 3', 'Sur', 'Sur 2', 'Sur 3'];
    
    while ($fila = mysqli_fetch_assoc($resultado)) {    
        
        $clientes[] = array(
            'Id' => $fila['Id'],
            'nombre' => $fila['nombre'],
            'apellido' => $fila['apellido'],
            'email' => $fila['email'],
            'telefono' => $fila['telefono'],
            'direccion' => $fila['direccion'],
            'localidad' => $fila['localidad'],
            'razonSocial' => $fila['razonSocial']
        );
        

        $contador++;
    }





?>