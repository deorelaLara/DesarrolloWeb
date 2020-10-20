<?php 
    include('class_cliente_dal.php');

    #objeto cliente ---- instancia
    $obj_cliente = new cliente_dal;
    $result = $obj_cliente->by_id(9);

    echo "---------------- CLIENTE BY ID --------------------<br>";
    #OBTENER DATOS POR ID ESPECIFICADO
    if($result==null){
        echo "No se encontraron registros";
    }
    else{
        echo "<pre>";
        print_r($result);
        echo "<pre>";
    }
    echo "<br><br>---------------- LISTA DE CLIENTES --------------------";
    #OBTENER LISTA DE CLIENTES TOTALES
    $result2 = $obj_cliente->getClientes();

    if($result2==null){
        echo "<br>No se encontraron registros";
    }
    else{
        echo "<pre>";
        print_r($result2);
        echo "<pre>";
    }

    echo "<br><br>---------------- EXISTE CLIENTE --------------------";
    $cuantos = $obj_cliente->existe(12);
    echo "<br>Coincidencias ---> ".$cuantos;
    
    /*
    echo "<br><br>---------------- INSERT CLIENTE --------------------<br>";
    $obj_insert = new cliente(5, "Angel Garcia", "keloxGarcia@gmail.com");
    $insert = $obj_cliente->insertCliente($obj_insert);

    if($insert ==1){
        echo "<br>Cliente Insertado con exito.";
    }
    else{
        echo "<br>Cliente no insertado.";
    }
    */
    
    /*echo "<br><br>---------------- DELETE CLIENTE --------------------<br>";
    $obj_delete = new cliente(8);
    $del = $obj_cliente->deleteCliente($obj_delete);
    if($del == 1){
        echo "<br> Cliente eliminado con exito";
    }else{
        echo "<br> Cliente no se pudo eliminar";
    }*/

    echo "<br><br>---------------- UPDATE CLIENTE --------------------<br>";
    echo "HOLA";
    $obj_update= new cliente(9, "Juan Perez", "juanchoPerez@gmail.com");
    $update = $obj_cliente->updateCliente($obj_update);
?>