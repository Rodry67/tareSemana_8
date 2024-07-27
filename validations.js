function validateFlightForm() {
    const plazasDisponibles = document.getElementById('plazas_disponibles').value;
    const precio = document.getElementById('precio').value;

    if (isNaN(plazasDisponibles) || plazasDisponibles <= 0) {
        alert("Por favor ingrese un número válido para Plazas Disponibles.");
        return false;
    }

    if (isNaN(precio) || precio <= 0) {
        alert("Por favor ingrese un número válido para Precio.");
        return false;
    }

    return true;
}

function validateHotelForm() {
    const habitacionesDisponibles = document.getElementById('habitaciones_disponibles').value;
    const tarifaNoche = document.getElementById('tarifa_noche').value;

    if (isNaN(habitacionesDisponibles) || habitacionesDisponibles <= 0) {
        alert("Por favor ingrese un número válido para Habitaciones Disponibles.");
        return false;
    }

    if (isNaN(tarifaNoche) || tarifaNoche <= 0) {
        alert("Por favor ingrese un número válido para Tarifa por Noche.");
        return false;
    }

    return true;
}
