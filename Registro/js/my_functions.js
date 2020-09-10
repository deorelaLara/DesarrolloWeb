var pattern = /^[a-zA-Z]{4}(\d{6})(([a-z0-9]){3})?$/;

function valida_forma(){
    //EL ELEMENTO QUE SE TRAE ES EL ID QUE SE PONE EN LA ETIQUETA HTML
    var var_rfc = document.getElementById("irfc").value;
    var var_nombre = document.getElementById("inombre").value;
    var var_apellidoPat = document.getElementById("iapellidoPat").value;
    var var_apellidoMat = document.getElementById("iapellidoMat").value;
    var var_empresa = document.getElementById("iempresa").value;
    var var_telefono = document.getElementById("itel").value;
    var var_email = document.getElementById("iemail").value;
    var var_curso = document.getElementById("scurso").value;
    var var_status = document.getElementById("status").textContent;
    //alert(var_status);
    //alert(var_rfc);
    
    if(var_rfc.length==0){
        alert("Error: el campo RFC es obligatorio, verificar. ");
        return false;
    }
    else if(!pattern.test(rfc)){
        alert("Error: El RFC esta mal formado, verificar.");
        return false;
    }
    else if(var_nombre.length==0){
        alert("Error: el campo Nombre es obligatorio, verificar ");
        return false;
    }
    else if(var_apellidoPat.length == 0){
        alert("Error: el campo Apellido Paterno es obligatorio, verificar ");
        return false;
    }
    else if(var_apellidoMat.length == 0){
        alert("Error: el campo Apellido Materno es obligatorio, verificar ");
        return false;
    }
    else if(var_empresa.length == 0){
        alert("Error: el campo Empresa es obligatorio, verificar ");
        return false;
    }
    else if(var_telefono.length == 0){
        alert("Error: el campo Telefono es obligatorio, verificar ");
        return false;
    }
    else if(var_email.length == 0){
        alert("Error: el campo email es obligatorio, verificar ");
        return false;
    }
    else if(var_curso == "0"){
        alert("Error: el campo Curso es obligatorio, verificar ");
        return false;
    }
}

function validaRFC(){
    //alert("hola");
    pattern = /^[a-zA-Z]{4}(\d{6})(([a-zA-Z0-9]){3})?$/;
    rfc = document.getElementById("irfc").value;
    document.getElementById("status").innerHTML = pattern.test(rfc);
    return pattern.test(rfc);
 }

 function validaRFC2(){
    //alert("hola");
    pattern = /^[a-zA-Z]{4}(\d{6})(([a-zA-Z0-9]){3})?$/;
    rfc = document.getElementById("irfc").value;
    document.getElementById("status").innerHTML = (pattern.test(rfc)) ? "Formato OK" : "Hay errores de formato";
    return pattern.test(rfc);
 }