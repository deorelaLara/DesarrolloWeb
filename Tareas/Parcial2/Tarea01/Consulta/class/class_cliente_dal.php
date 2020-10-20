<?php
    include('class_cliente.php');
    #conexion db
    include('class_db.php');
    
    class cliente_dal extends class_db{
        
        function __construct(){
            parent::__construct();
        }

        function __destruct(){
            parent::__destruct();
        }

        function by_id($id){
            $num_cliente = $this->db_conn->real_escape_string($id);
            $sql = "select * from cliente where num_cliente='$id'";
            $this->set_sql($sql);
            $result=mysqli_query($this->db_conn, $this->db_query)or die(mysqli_error($this->db_conn));
            $total_clientes = mysqli_num_rows($result);
            $obj_det=null;

            if($total_clientes ==1){
                #se asigna a un array
                $renglon = mysqli_fetch_assoc($result);
                $obj_det = new cliente($renglon['num_cliente'], $renglon['nombre_completo'],$renglon['email']);
            } #end if 
            return $obj_det;
        } #end function

        function getClientes(){
            $sql = "select * from cliente";
            $this->set_sql($sql);
            $result=mysqli_query($this->db_conn, $this->db_query)or die(mysqli_error($this->db_conn));
            $total_clientes = mysqli_num_rows($result);
            $obj_det=null;

            if($total_clientes>0){
                $i=0;
                while($renglon = mysqli_fetch_assoc($result)){
                    $obj_det = new cliente(
                        $renglon['num_cliente'],
                        $renglon['nombre_completo'],
                        $renglon['email']
                    );

                    $i++;
                    $list[$i] = $obj_det;
                    unset($obj_det);
                }#end while
                return $list;
            }#end if
        }#end function

        function existe($id){
            $num_cliente = $this->db_conn->real_escape_string($id);
            $sql = "select count(*) from cliente"; // ---> Solo regresa 1 campo
            $sql.= " where num_cliente='$id'";
            $this->set_sql($sql);
            $result=mysqli_query($this->db_conn, $this->db_query)or die(mysqli_error($this->db_conn));

            $renglon = mysqli_fetch_array($result);
            $cant = $renglon[0]; // le indicamos la posicion en la que se encuentra el cliente dentro del array

            return $cant;
        }#end function 

        function insertCliente($obj){
            $sql = "insert into cliente(";
            $sql.="num_cliente, ";
            $sql.="nombre_completo, ";
            $sql.="email)";
            $sql.=" values (";
            $sql.="".$obj->getNUMCLIENTE().",";
            $sql.="'".$obj->getNOMBRECOMPLETO()."',";
            $sql.="'".$obj->getEMAIL()."'";
            $sql.=")";
            #PRUEBA PARA SABER QUE QUERY ESTOY INSERTANDO
            #echo "<br>";
            #echo $sql;

            $this->set_sql($sql);
            $this->db_conn->set_charset("utf8");
            mysqli_query($this->db_conn, $this->db_query)or die(mysqli_error($this->db_conn));

            if(mysqli_affected_rows($this->db_conn)==1){
                $insertado =1;
            }
            else{
                $insertado = 0;
            }
            unset($obj);
            return $insertado;

        }#end function

        function deleteCliente($obj){
            $num_cliente = $this->db_conn->real_escape_string($obj->getNUMCLIENTE());
            $sql = "delete from cliente where num_cliente=".$obj->getNUMCLIENTE();
            //echo $sql;return;
            $this->set_sql($sql);
            mysqli_query($this->db_conn, $this->db_query)or die(mysqli_error($this->db_conn));
            if(mysqli_affected_rows($this->db_conn)==1){
                $borrado = 1;
            }
            else{
                $borrado = 2;
            }
            unset($obj);
            return $borrado;

        }
        function updateCliente($obj){
            $sql = "update cliente set nombre_completo=.'.$obj->getNOMBRECOMPLETO().', email=.$obj->getEMAIL() where num_cliente=".$obj->getNUMCLIENTE();
            echo "<br>";
            echo $sql;
        }
    }
?>