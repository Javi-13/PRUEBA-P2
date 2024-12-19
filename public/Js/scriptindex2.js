function convertir(){
    var numero = document.getElementById("inpConvertidor").value;
    var DeMoneda = document.getElementById("moneda1").value;
    var AMoneda = document.getElementById("moneda2").value;

    if (numero < 0){
        alert("No se admiten valores negativos");
        return false;
}
    if (DeMoneda === AMoneda){
        alert("No se puede convertir la misma moneda");
        return false;
    }

    var tasaConversion;
    if (DeMoneda === "USD" && AMoneda === "EUR"){
        tasaConversion = 0.96;
    }else if(DeMoneda === "EUR" && AMoneda === "USD"){
        tasaConversion = 1.04;   
    }else{
        alert("Moneda no encontrada");
        return false;
    }
    var resultado = numero * tasaConversion;

    document.getElementById("result").innerHTML = "Resultado: " + resultado.toFixed(2);

    if (resultado >= 500){
        window.location.href = " http://localhost/Parcial2DW/Index3-CResultF1"
    }
    return false;
}



