<?php
    #definicion objeto
    include('class_catalogo_curso.php');
    #conexion db
    include('class_db.php');
    class catalogo_curso_dal extends class_db{

        function __construct(){
            parent::__construct();
        }//construct
        
        function __destruct(){
            parent::__destruct();
        }//destruct

        function by_id($id){
            $rfc = $this->db_conn->real_escape_string($id);
            $sql = "select * from catalogo_curso where id_curso='$id'";
            $this->set_sql($sql);
            $result=mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));
            $total_cursos=mysqli_num_rows($result);
            $obj_det=null;

            if($total_cursos == 1){
                #se asigna a un array 
                $renglon = mysqli_fetch_assoc($result);
                $obj_det = new catalogo_curso($renglon["ID_CURSO"], $renglon["NOMBRE_CURSO"], $renglon["FECHA_ALTA"]);
            }#end if

            return $obj_det;

        }
    }
?>