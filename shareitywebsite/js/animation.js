//Animation
window.addEventListener('scroll', function(){
  let animatobj1 = document.getElementById('animatobj1');
  let animatobj2 = document.getElementById('animatobj2');
  let animatobj3 = document.getElementById('animatobj3');
  let animatobj4 = document.getElementById('animatobj4');
  let animatobj5 = document.getElementById('animatobj5');
  let animatobj6 = document.getElementById('animatobj6');
  let animatobj7 = document.getElementById('animatobj7');
  let animatobj8 = document.getElementById('animatobj8');

  let positionObj1 = animatobj1.getBoundingClientRect().top;
  let positionObj2 = animatobj2.getBoundingClientRect().top;
  let positionObj3 = animatobj3.getBoundingClientRect().top;
  let positionObj4 = animatobj4.getBoundingClientRect().top;
  let positionObj5 = animatobj5.getBoundingClientRect().top;
  let positionObj6 = animatobj6.getBoundingClientRect().top;
  let positionObj7 = animatobj7.getBoundingClientRect().top;
  let positionObj8 = animatobj8.getBoundingClientRect().top;

  // console.log(positionObj1);

  let sizeScreen = window.innerHeight;
  //console.log(sizeScreen)
  if (positionObj1 < sizeScreen){
    animatobj1.style.animation = 'moveLeft 2s ease-out'
  }
  if (positionObj2 < sizeScreen){
    animatobj2.style.animation = 'moveRight 2s ease-out'
  }
  if (positionObj3 < sizeScreen){
    animatobj3.style.animation = 'moveRight 2s ease-out'
  }
  if (positionObj4 < sizeScreen){
    animatobj4.style.animation = 'moveLeft 2s ease-out'
  }
  if (positionObj5 < sizeScreen){
    animatobj5.style.animation = 'moveLeft 2s ease-out'
  }
  if (positionObj6 < sizeScreen){
    animatobj6.style.animation = 'moveRight 2s ease-out'
  }
  if (positionObj7 < sizeScreen){
    animatobj7.style.animation = 'moveRight 2s ease-out'
  }
  if (positionObj8 < sizeScreen){
    animatobj8.style.animation = 'moveLeft 2s ease-out'
  }

})