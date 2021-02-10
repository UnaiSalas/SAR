function validar(){
    var nombre, correo, mensaje;
    nombre = document.getElementById("nombre").value;
    correo = document.getElementById("correo").value; 
    mensaje = document.getElementById("mensaje").value;

    expresion = /\w@\w+\.+[a-z]/

    if (nombre === "" || correo === "" || mensaje === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }else if (!expresion.test(correo)){
        alert("El correo no vale");
        return false;
    }
}

