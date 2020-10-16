var pattern = /^[a-zA-Z]{4}(\d{6})(([a-z0-9]){3})?$/;
var pattern2 = /^[a-zA-Z]{3,30}?$/;


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
    
    // VALIDACION RFC
    if(var_rfc.length==0){
        alert("Error: el campo RFC es obligatorio, verificar. ");
        return false;
    }
    else if(!pattern.test(rfc)){
        alert("Error: El RFC esta mal formado, verificar.");
        return false;
    }

    //VALIDACION NOMBRE
    else if(var_nombre.length==0){
        alert("Error: el campo Nombre es obligatorio, verificar ");
        return false;
    }
    else if(!pattern2.test(valnom)){
        alert("Error: El nombre esta mal formado, verificar");
        return false; 
    }

    //VALIDACION APELLIDO PATERNO 
    else if(var_apellidoPat.length == 0){
        alert("Error: el campo Apellido Paterno es obligatorio, verificar ");
        return false;
    }
    else if(!pattern2.test(valpat)){
        alert("Error: El Apellido Paterno esta mal formado, verificar");
        return false; 
    }

    //VALIDACION APELLIDO MATERNO
    else if(var_apellidoMat.length == 0){
        alert("Error: el campo Apellido Materno es obligatorio, verificar ");
        return false;
    }
    else if(!pattern2.test(valmat)){
        alert("Error: El Apellido Materno esta mal formado, verificar");
        return false; 
    }

    //VALIDACION EMPRESA
    else if(var_empresa.length == 0){
        alert("Error: el campo Empresa es obligatorio, verificar ");
        return false;
    }

    //VALIDACION TELEFONO 
    else if(var_telefono.length == 0){
        alert("Error: el campo Telefono es obligatorio, verificar ");
        return false;
    }

    //VALIDACION EMAIL
    else if(var_email.length == 0){
        alert("Error: el campo email es obligatorio, verificar ");
        return false;
    }

    //VALIDACION CURSO 
    else if(var_curso == "0"){
        alert("Error: el campo Curso es obligatorio, verificar ");
        return false;
    }
    //alert("hola");
}

/*
function validaRFC(){
    //alert("hola");
    pattern = /^[a-zA-Z]{4}(\d{6})(([a-zA-Z0-9]){3})?$/;
    rfc = document.getElementById("irfc").value;
    document.getElementById("status").innerHTML = pattern.test(rfc);
    return pattern.test(rfc);
 }*/


 function validaRFC2(){
    //alert("hola");
    //pattern = /^[a-zA-Z]{4}(\d{6})(([a-zA-Z0-9]){3})?$/;
    rfc = document.getElementById("irfc").value;
    document.getElementById("status_rfc").innerHTML = (pattern.test(rfc)) ? "Formato OK" : "Hay errores de formato";
    return pattern.test(rfc);
 }

 function validaFullName(){
    //alert("TEST")
    valnom = document.getElementById("inombre").value;
    valpat = document.getElementById("iapellidoPat").value;
    valmat = document.getElementById("iapellidoMat").value;

    if(valnom.length!=0){
        document.getElementById("status_name").innerHTML = (pattern2.test(valnom))? "OK" : "Hay errores de formato";
        return pattern2.test(valnom);
    }
    else if(valpat.length!=0){
        
        document.getElementById("status_apellidoPat").innerHTML = (pattern2.test(valpat))? "OK" : "Hay errores de formato";
        return pattern2.test(valpat);
    }
    else if(valmat.length!=0){
        document.getElementById("status_apellidoMat").innerHTML = (pattern2.test(valmat))? "OK" : "Hay errores de formato";
        return pattern2.test(valmat);
    }
    

/*
     function validaNombre(){
     valnombre = document.getElementById("inombre").value;
     //alert(valnombre);
     document.getElementById("status_name").innerHTML = (pattern2.test(valnombre))? "OK" : "Hay errores de formato";
     return pattern2.test(valnombre);
    }
        */
 }