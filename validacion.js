function validar() {
    var nombre, precio, imagen, stock, expN, expP;
    nombre = document.getElementById("nombre").value;
    precio = document.getElementById("precio").value;
    stock = document.getElementById("stock").value;

    expN = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;

    if (nombre == "" || precio == "" || stock == "") {
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if (!isNaN(nombre)) {
        alert("El nombre es incorrecto, ingrese solo letras");
        return false;
    } else if (nombre.length > 40) {
        alert("El nombre es muy largo");
        return false;
    } else if (!expN.test(nombre)) {
        alert("El nombre no es valido");
        return false;
    } else if (!isNaN(precio)) {
        alert("Número no valido")
        return false;
    } else if (!isNaN(stock)) {
        alert("Número no valido")
        return false;
    }

}