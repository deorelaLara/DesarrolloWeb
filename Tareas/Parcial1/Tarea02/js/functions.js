function valida_form(){
    //alert("hola")
    var var_name = document.getElementById("i_name").value;
    var var_email = document.getElementById("i_email").value;

    if(var_name.length==0){
        alert("Error: el campo Nombre es obligatorio, verificar.");
        return false;
    }
    else if(var_email.length==0){
        alert("Error: el campo email es obligatorio, verificar.");
    }
}