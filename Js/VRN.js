 /*Aquí se observa una funcion llamada solonumero la cual se aplica
 cuando en un textfield quieres que el usuario solo ingrese números.*/
 function solonumeros(e){
    key=e.keyCode|| e.wich;
    teclado=String.fromCharCode(key);
    numeros="0123456789";
    especiales="8-37-38-46";//array
    teclado_especial=false;
  //En las siguientes líneas de código se puede ver como son dos condiciones en este caso IF´s.
  //En el primer IF es para que el usuario pueda poner caracteres especiales como el guión largo, etc.
  for(var i in especiales){
      if(key==especiales[i]){
          teclado_especial=true;  
      }
  }
  /* Pero si el usuario quiere incluir en los numero alguna letra o signo que no este en los caracteres especiales,
  automaticamente se va a bloquear y no va a poder escribir. */
  if(numeros.indexOf(teclado)==-1 && !teclado_especial){
      return false;
  }
  // Comentado por: Claudia Samantha Quesney López
  }