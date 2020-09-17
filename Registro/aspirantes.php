<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Aspirantes</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css"
</head>
<body>
    <header id="hdr">
        <h2>Ingrese sus datos para el pre-registro a los cursos</h2>
        <p>Completar los datos requeridos, esta pantalla esta adaptada para operar en dispositivos móviles</p>
    </header>
    

    <div class="container" id="hola">
        <form action="#" method="post" accept-charset="utf-8" onsubmit=" return valida_forma();">
           
            <div class="row" id="rfc">
                <div class="col-25">
                    <label for="lrfc">R.F.C</label>
                    <label id="status_rfc" ></label>
                </div>
                <div class="col-75">
                    <input type="text" class="mayusculas" name="irfc" id="irfc" maxlength="13" size="20" placeholder="R.F.C" onkeyup="validaRFC2();" required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lnom">Nombre</label>
                    <label id="status_name"></label>
                </div>
                <div class="col-75">
                    <input type="text" class="mayusculas" ame="inombre" id="inombre" maxlength="30" size="40" placeholder="Nombre" onkeyup="validaFullName();" required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lapellidoPat">Apellido Paterno</label>
                    <label id="status_apellidoPat"></label>
                </div>
                <div class="col-75">
                    <input type="text" class="mayusculas" name="iapellidoPat" id="iapellidoPat" maxlength="30" size="20" placeholder="Apellido Paterno" onkeyup="validaFullName();" required>
                </div>
            </div>
            
            <div class="row">
                <div class="col-25">
                    <label for="lapellidoMat">Apellido Materno</label>
                    <label id="status_apellidoMat"></label>
                </div>
                <div class="col-75">
                    <input type="text" class="mayusculas" name="iapellidoMat" id="iapellidoMat" maxlength="30" size="20" placeholder="Apellido Materno" onkeyup="validaFullName();" required>
                </div>    
            </div>
            
            <div class="row">
                <div class="col-25">
                    <label for="lemp">Empresa</label>
                </div>
                <div class="col-75">
                    <input type="text" class="mayusculas" name="iempresa" id="iempresa" maxlength="30" size="40" placeholder="Nombre Empresa" required>
                </div>    
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="ltel">Telefono</label>
                </div>
                <div class="col-75">
                    <input type="tel" pattern="[0-9]{10}" name="itel" id="itel" maxlength="10" size="15" placeholder="Telefono 10 Digitos" required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lemail">Email</label>
                </div>
                <div class="col-75">
                    <input type="email" name="iemail" id="iemail" maxlength="60" size="80" placeholder="Email" required>
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
    <script src="js/my_functions.js" type="text/javascript"></script>
</body>
</html>