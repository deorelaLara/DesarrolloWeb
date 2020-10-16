<?php
    #CLASE CONEXION PARA BASE DE DATOS
    #EVITAR LA REDEFINICION DE LA CLASE 

    #Si la clase ya existe no realiza las siguientes instrucciones
    if(class_exists("class_db")!=true){
        Class class_db{
            //variables de instancia 
            var $db_conn;
            var $db_name;
            var $db_query;

            //METODO CONSTRUCTOR
            function __construct(){
                $this->set_db("localhost", "root", "", "registro_cursos");
            }//end construc
            
            //METODO DESTRUCTOR
            function __destruct(){
                $this->close_db();
            }//end destruc

            //FUNCION SET DB
            function set_db($host, $user, $passwd, $db){
                if(!isset($this->db_conn)){
                    #CREAMOS LA CONEXION
                    $this->db_conn=mysqli_connect($host, $user, $passwd, $db);
                    $this->db_name=$db;
                }
            }//end set DB

            //FUNCION CLOSE DB
            function close_db(){
                if(isset($db_conn)){
                    #parametro de que conexion va a cerrar
                    mysqli_close($db_conn);
                }
            }//end close BD

            function set_sql($sql){
                $this->db_query=$sql;
            }
        }//end class
    }//end redef
    
?>