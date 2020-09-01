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

    //alert(var_rfc);
    
    if(var_rfc.length==0){
        alert("Error: el campo RFC es obligatorio, verificar ");
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