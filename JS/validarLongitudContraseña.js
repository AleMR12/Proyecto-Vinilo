function validarFormulario() {
    var contraseña = document.getElementById("password").value;
    var confirmarContraseña = document.getElementById("confirm_password").value;

    // Verificar si la contraseña tiene al menos 12 caracteres, una mayúscula y un símbolo
    var regex = /^(?=.*[A-Z])(?=.*[^\w\d\s])(?=.{12,})/;
    
    if (!regex.test(contraseña)) {
        alert("La contraseña debe tener al menos 12 caracteres, una mayúscula y un símbolo.");
        return false;
    }

    // Verificar si las contraseñas coinciden
    if (contraseña !== confirmarContraseña) {
        alert("Las contraseñas no coinciden.");
        return false;
    }

    return true; // Permitir el envío del formulario si la validación es exitosa
}