numeric_pattern = /^[1-10]$/; //No se porque solo me admite un numero para tomarlo como ok 
num = /^\d+$:/;

function valida_forma(){
   //alert("HOLA");
    var var_codigo = document.getElementById("i_codigo").value;
    var var_nombre = document.getElementById("i_name").value;
    var var_editorial = document.getElementById("s_editorial").value;
    var var_autor = document.getElementById("i_autor").value;
    var var_fecha = document.getElementById("i_edicion").value;
    var var_cantidad = document.getElementById("s_cantidad").value;

    if(var_codigo.length==0){
        alert("Error: el campo CODIGO es obligatorio, verificar");
        return false;
    }
    else if(!numeric_pattern.test(code)){
        alert("Error: Codigo mal introducido, verificar")
        return false;
    }
    else if (var_nombre.length==0){
        alert("Error: el campo NOMBRE DE LIBRO es obligatorio, verificar");
        return false;
    }
    else if (var_editorial == "0"){
        alert("Error: el campo EDITORIAL es obligatorio, seleccionar una opcion.")
        return false;    
    }
    else if(var_autor.length==0){
        alert("Error, el campo AUTOR es obligatorio, verificar");
        return false;
    }
    else if(var_fecha.length==0){
        alert("Error: el campo FECHA EDICION es obligatorio, verificar");
        return false;
    }
    else if(var_cantidad == "0"){
        alert("Error: el campo CANTIDAD es obligatorio verificar");
        return false;
    }
}

function validaCodigo(){
    //alert("Hola")
    code = document.getElementById("i_codigo").value;
    document.getElementById("status").innerHTML = (numeric_pattern.test(code)) ? "Formato OK": "Hay errores de formato";
    return numeric_pattern.test(code);
}