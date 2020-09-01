<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Aspirantes</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css"
</head>
<body>
    <h2>Ingrese sus datos para el pre-registro a los cursos</h2>
    <p>Completar los datos requeridos, esta pantalla esta adaptada para operar en dispositivos móviles</p>

    <div class="container" id="hola">
        <form action="#" method="post" accept-charset="utf-8">
           
            <div class="row" id="rfc">
                <div class="col-25">
                    <label for="lrfc">R.F.C</label>
                </div>
                <div class="col-75">
                    <input type="text" name="irfc" id="irfc" maxlength="13" size="20" placeholder="R.F.C">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lnom">Nombre</label>
                </div>
                <div class="col-75">
                    <input type="text" name="inombre" id="inombre" maxlength="30" size="40" placeholder="Nombre">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lapellidoPat">Apellido Paterno</label>
                </div>
                <div class="col-75">
                    <input type="text" name="iapellidoPat" id="iapellidoPat" maxlength="30" size="20" placeholder="Apellido Materno">
                </div>
            </div>
            
            <div class="row">
                <div class="col-25">
                    <label for="lapellidoMat">Apellido Materno</label>
                </div>
                <div class="col-75">
                    <input type="text" name="iapellidoMat" id="iapellidoMat" maxlength="30" size="20" placeholder="Apellido Paterno">
                </div>    
            </div>
            
            <div class="row">
                <div class="col-25">
                    <label for="lemp">Empresa</label>
                </div>
                <div class="col-75">
                    <input type="text" name="iempresa" id="iempresa" maxlength="30" size="40" placeholder="Nombre Empresa">
                </div>    
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="ltel">Telefono</label>
                </div>
                <div class="col-75">
                    <input type="tel" pattern="[0-9]{10}" name="itel" id="itel" maxlength="10" size="15" placeholder="Telefono 10 Digitos">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lemail">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" name="iemail" id="iemail" maxlength="60" size="80" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Cursos Disponibles</label>
                </div>
                <div class="col-75">
                    <select name="scurso" id="scurso">
                        <option value="0">Seleccione</option>
                        <option value="1">Introduccion a la Ecologia</option>
                        <option value="2">Recursos Renovables</option>
                        <option value="3">Contaminacion del Medio Ambiente</option>
                        <option value="4">Cultura Ecológica</option>
            </select>
                </div>
            </div>

            <div class="row">
                <div class="boton">
                    <input type="submit" id="btn_save" name="btn_save" value="Registrar">
                </div>
            </div>
        </form>
    </div>    <!--Div Container-->
</body>
</html>