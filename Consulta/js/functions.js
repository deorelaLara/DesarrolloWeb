function valida_form(){
    //alert("hola")
    var var_name = document.getElementById("i_name").value;
    var var_email = document.getElementById("i_email").value;
    //var var_radio1 = document.getElementById("i_prod1").checked;
    //var var_radio2 = document.getElementById("i_prod2").checked;
    var var_enquiry = document.getElementById("s_enquiry").value;
    var var_enq = document.getElementById("t_Enquiry").value; 

    if(var_name.length==0){
        alert("Error: el campo Nombre es obligatorio, verificar.");
        return false;
    }
    else if(var_email.length==0){
        alert("Error: el campo email es obligatorio, verificar.");
    }
    /*else if (var_radio1 == false){
        alert("Error: Seleccione una opción de producto por favor");
        return false;
    }
    else if (var_radio2 == false){
        alert("Error: Seleccione una opción de producto por favor");
        return false;
    }*/
    else if (var_enquiry == "0"){
        alert("Error: el campo Enquiry es obligatorio, verificar ");
        return false;
    }
    else if(var_enq.length==0){
        alert("Error: es necesario que introduzca su peticion ")
        return false;
    }
    
}