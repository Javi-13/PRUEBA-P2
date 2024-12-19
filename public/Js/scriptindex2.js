function convertir(){
    var numero = document.getElementById("inpConvertidor").value;
    var DeMoneda = document.getElementById("moneda1").value;
    var AMoneda = document.getElementById("moneda2").value;

    //Validacion para cuando se coloque numeros negativos 
    if (numero < 0){
        alert("No se admiten valores negativos");
        return false;
}
    //Validacion para cuando se coloque la misma moneda
    if (DeMoneda === AMoneda){
        alert("No se puede convertir la misma moneda");
        return false;
    }
    //Calcaular el total depende la tasa de conversion de cada moneda
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

    //Redireccionamiento al index 3
    if (resultado >= 500){
        window.location.href = " http://localhost/Parcial2DW/Index3-CResultF1"
    }
    return false;
}



