<?php
    if(class_exists('cliente')!=true){
        class cliente{
            #variables de instancia
            protected $num_cliente;
            protected $nombre_completo;
            protected $email;

            #constructor
            public function __construct($NUM_CLIENTE=null, $NOMBRE_COMPLETO=null, $EMAIL=null){
                $this-> num_cliente = $NUM_CLIENTE;
                $this-> nombre_completo = $NOMBRE_COMPLETO;
                $this-> email = $EMAIL;
            }#end constructor

            #GET & SET
            public function getNUMCLIENTE(){
                return $this->num_cliente;
            }
            public function getNOMBRECOMPLETO(){
                return $this->nombre_completo;
            }
            public function getEMAIL(){
                return $this->email;
            }

            public function setNUMCLIENTE($NUM_CLIENTE){
                $this->num_cliente = $NUM_CLIENTE;
                return $this;
            }
            public function setNOMBRECOMPLETO($NOMBRE_COMPLETO){
                $this->nombre_completo= $NOMBRE_COMPLETO;
                return $this;
            }
            public function setEMAIL($EMAIL){
                $this->email = $EMAIL;
                return $this;
            }
        }#end class
    }#end if
?>