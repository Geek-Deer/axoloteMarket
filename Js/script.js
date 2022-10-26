//Las siguientes variables son llamadas const y se les asigna un valor cuando se declaran.
const slides=document.querySelector(".slider").children;
const prev=document.querySelector(".prev");
const next=document.querySelector(".next");
const indicator=document.querySelector(".indicator");
/*La instrucción let declara una variable de alcance local con ámbito de bloque, la cual, opcionalmente,
puede ser inicializada con algún valor*/
let index=0;
//El método prev. devuelve el elemento hermano anterior a cada elemento <li>.
  prev.addEventListener("click",function(){
      prevSlide();
      updateCircleIndicator(); 
      resetTimer();
  })
/*El método next regresa un objeto con las propiedades done y value.
También puedes pasar un parámetro al método next para enviar un valor al generador.*/
  next.addEventListener("click",function(){
     nextSlide(); 
     updateCircleIndicator();
     resetTimer();
     
  })
  //Crear indicaciones circulares.
   function circleIndicator(){
       for(let i=0; i< slides.length; i++){
           const div=document.createElement("div");
                 div.innerHTML=i+1;
               div.setAttribute("onclick","indicateSlide(this)")
               div.id=i;
               if(i==0){
                   div.className="active";
               }
              indicator.appendChild(div);
       }
   }
   circleIndicator();
   /*Las siguientes funciones son parte del carousel (fotos que se muestran 
   como diapositivas) de fotos que se muestran en el index.*/
   function indicateSlide(element){
        index=element.id;
        changeSlide();
        updateCircleIndicator();
        resetTimer();
   }
   function updateCircleIndicator(){
       for(let i=0; i<indicator.children.length; i++){
           indicator.children[i].classList.remove("active");
       }
       indicator.children[index].classList.add("active");
   }
//Regresarse a la foto anterior.
  function prevSlide(){
       if(index==0){
           index=slides.length-1;
       }
       else{
           index--;
       }
       changeSlide();
  }
  //Ir a la siguiente foto.
  function nextSlide(){
     if(index==slides.length-1){
         index=0;
     }
     else{
         index++;
     }
     changeSlide();
  }
  //Cambiar de foto.
  function changeSlide(){
             for(let i=0; i<slides.length; i++){
                  slides[i].classList.remove("active");
             }

      slides[index].classList.add("active");
  }
  function resetTimer(){
        //Picar
        clearInterval(timer);
        //Timer - reiniciar
        timer=setInterval(autoPlay,4000);
  }
 /*El término reproducción automatica se refiere a cualquier característica que hace que el audio 
 comience a reproducirse sin que el usuario solicite específicamente que comience la reproducción.*/
 function autoPlay(){
     nextSlide();
     updateCircleIndicator();
 }
/*Finalizamos este código con la variable timer que es una variable tipo let
 la cual indica que va a estar cambiando las imagénes en cierto intervalo de tiempo.*/
 let timer=setInterval(autoPlay,4000);
 //Comentado por: Claudia Samantha Quesney López