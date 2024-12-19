function convertir(){
    var numero = document.getElementById("inpConvertidor").value;
    var DeMoneda = document.getElementById("moneda1").value;
    var AMoneda = document.getElementById("moneda2").value;

    if (numero < 0){
        alert("No se admiten valores negativos")
        return false;
    
    if (DeMoneda == AMoneda){
        alert("No se puede convertir ")
    }




    }


}

