//inicializacion de variables
let tarjetasDestapadas=0;
let Tarjeta1=null;
let Tarjeta2= null;
let primerResultado = null;
let segundoResultado = null;
let movimientos = 0;
let aciertos =0;
let temporizador = false;
let timer =60;
let tiempoRegresivo = null;
let timerInicial = 60;

//apuntado al docuemnto HTML
let mostrarMovimientos = document.getElementById('movimientos');
let mostrarAciertos = document.getElementById('aciertos');
let mostrarTiempo = document.getElementById ('t-restante');

//generación de numeros aleatorios
let numeros =[1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8];
numeros= numeros.sort(()=>{return Math.random()-0.5});
console.log(numeros);

//funciones
function contarTiempo(){
     tiempoRegresivo = setInterval(()=>{
        timer--;
        mostrarTiempo.innerHTML =  ` Tiempo: ${timer} segundos`;
        if(timer == 0){
            clearInterval(tiempoRegresivo);
            bloquearTarjetas();

        }
    },1000);
}
function bloquearTarjetas(){
    for (let i = 0; i<=15; i++){
        let tarjetaBloqueada = document.getElementById(i);
        tarjetaBloqueada.innerHTML =numeros[i];
        tarjetaBloqueada.disabled=true;
    }
}

//funcion principal
function destapar(id){
    if(temporizador == false){
        contarTiempo();
        temporizador = true;
    }

tarjetasDestapadas++;
console.log(tarjetasDestapadas);

if(tarjetasDestapadas==1){

    //mostrar primer numero
Tarjeta1= document.getElementById(id);
primerResultado = numeros[id]
Tarjeta1.innerHTML = primerResultado;

    //deshabilitar primer boton 
       Tarjeta1.disabled = true;

} else if(tarjetasDestapadas==2){
    //mostrar segundo numero
    Tarjeta2 = document.getElementById(id);
    segundoResultado = numeros[id];
    Tarjeta2.innerHTML = segundoResultado;

    //Desabilitar segundo boton 
    Tarjeta2.disabled= true;

    //incrementar movimientos
    movimientos++;
    mostrarMovimientos.innerHTML = ` Movimientos: ${movimientos}`;
    
     if(primerResultado == segundoResultado){

         //encerar contador tarjetas destapadas
         tarjetasDestapadas = 0;

         //aumentar aciertos
         aciertos++;
         mostrarAciertos.innerHTML = Aciertos: ${aciertos};

         if(aciertos== 8){
        clearInterval(tiempoRegresivo);
        mostrarAciertos.innerHTML = `Aciertos: ${aciertos} ALV `
        mostrarMovimientos.innerHTML= ` Movimientos: ${movimientos} No estas tan wey`;
        mostrarTiempo.innerHTML= ` Exelente toma tu recompensa por demorarte ${movimientos}!!`
         }

     } else{
        //mostrar y tapar
        setTimeout(()=>{
        Tarjeta1.innerHTML = ' ';
        Tarjeta2.innerHTML = ' ';
        Tarjeta1.disabled = false;
        Tarjeta2.disabled = false;
        tarjetasDestapadas = 0;
        },800);
        
     } 

     }
 }