function valida_forma(){
    var var_rfc = document.getElementById("irfc").value;
    //alert(var_rfc);
    
    if(var_rfc.length==0){
        alert("Error: el campo RFC es obligatorio, verificar ");
        return false;
    }
}