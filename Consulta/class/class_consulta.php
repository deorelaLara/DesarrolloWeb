<?php 
    if(class_exists('consulta')!=true){
        class consulta{
            #variables de instancia
            protected $id_consulta;
            protected $nombre;
            protected $correo;
            protected $producto;
            protected $notificacion;
            protected $enquiry;
            protected $comentarios;

            #constructor 
            public function __construct($ID_CONSULTA=null, $NOMBRE=null, $CORREO=null, $PRODUCTO=null, 
                                            $NOTIFICACION=null, $ENQUIRY=null, $COMENTARIOS=null){
                $this-> id_consulta=$ID_CONSULTA;
                $this-> nombre = $NOMBRE;
                $this-> correo = $CORREO;
                $this-> producto = $PRODUCTO;
                $this-> notificacion = $NOTIFICACION;
                $this-> enquiry = $ENQUIRY;
                $this-> comentarios = $COMENTARIOS;
            }

            #GET & SET
            public function getIDCONSULTA(){
                return $this->id_consulta;
            }
            public function setIDCONSULTA($ID_CONSULTA){
                $this->id_consulta = $ID_CONSULTA;
                return $this;
            }
            
            public function getNOMBRE(){
                return $this->nombre;
            }
            public function setNOMBRE($NOMBRE){
                $this->nombre = $NOMBRE;
                return $this;
            }

            public function getCORREO(){
                return $this-> correo;
            }
            public function setCORREO($CORREO){
                $this->correo = $CORREO;
                return $this;
            }

            public function getPRODUCTO(){
                return $this-> comentarios;
            }
            public function setPRODUCTO($PRODUCTO){
                $this->producto = $PRODUCTO;
                return $this;
            }
            
            public function getNOTIFICACION(){
                return $this-> notificacion;
            }
            public function setNOTIFICACION($NOTIFICACION){
                $this->notificacion = $NOTIFICACION;
                return $this;
            }

            public function getENQUIRY(){
                return $this-> enquiry;
            }
            public function setENQUIRY($ENQUIRY){
                $this->enquiry = $ENQUIRY;
                return $this;
            }
            
            public function getCOMENTARIOS(){
                return $this->comentarios;
            }
            public function setCOMENTARIOS($COMENTARIOS){
                $this->comentarios=$COMENTARIOS;
                return $this;
            }
        }
    }#end if
?>