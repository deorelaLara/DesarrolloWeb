<?php
    include('class_catalogo_curso_dal.php');

    #OBJETO CURSO -- instancia
    $obj_curso = new catalogo_curso_dal;
    $result = $obj_curso->by_id(4);

    echo "<pre>";
    print_r($result);
    echo "<pre>";

?>