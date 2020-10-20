<?php 
    #CLASE CONEXION PARA BASE DE DATOS 
    #EVITAR LA REDEFINICION DE LA CLASE

    #si la clase ya existe no realiza las siguientes instrucciones
    if(class_exists("class_db")!= true){
        class class_db{
            //varuables de instancia
            var $db_conn;
            var $db_name;
            var $db_query;

            //METODO CONSTRUCTOR
            function __construct(){
                $this->set_db('localhost', 'root', '', 'consulta');
            }//end constructor

            //METODO DESTRUCTOR
            function __destruct(){
                $this->close_db();
            }//end destructor

            function set_db($host, $user, $passwd, $db){
                #creamos la conexion
                $this->db_conn=mysqli_connect($host, $user, $passwd, $db);
                $this->db_name=$db;
            }//end set DB

            //FUNCION CLOSE DB
            function close_db(){
                if(isset($db_conn)){
                    #parametro para cerrar la conexion que se le indique
                    mysqli_close($db_conn);
                }
            }//end close BD
            
            function set_sql($sql){
                $this->db_query=$sql;
            }
        }#end class
    }#end if


?>