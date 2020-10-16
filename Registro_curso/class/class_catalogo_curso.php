<?php
    if(class_exists('catalogo_curso')!=true){
        class catalogo_curso{

            #Variables de instancia 
            protected $ID_CURSO;
            protected $NOMBRE_CURSO;
            protected $FECHA_ALTA;

            #constructor ----------> variables de uso local 
            public function __construct($id_curso=null, $nombre_curso=null, $fecha_alta=null){
                $this -> ID_CURSO = $id_curso;
                $this -> NOMBRE_CURSO = $nombre_curso;
                $this -> FECHA_ALTA = $fecha_alta;
            }

            #GET & SET
            public function getIDCURSO(){
                return $this->ID_CURSO;
            }
            public function getNOMBRECURSO(){
                return $this->NOMBRE_CURSO;
            }
            public function getFECHAALTA(){
                return $this->FECHA_ALTA;
            }
            public function setIDCURSO($id_curso){
                #      parametro | propiedad
                $this->ID_CURSO = $id_curso;
                return $this;
            }
            public function setNOMBRECURSO($nombre_curso){
                #           parametro | propiedad
                $this->NOMBRE_CURSO = $nombre_curso;
                return $this; 
            }
            public function setFECHAALTA($fecha_alta){
                #         parametro | propiedad
                $this->FECHA_ALTA = $fecha_alta;
                return $this;
            }


        }#end class
    }//end redefinition
?>