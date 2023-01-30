var character = document.getElementById("character");
var block = document.getElementById("block");

function jump(){
    if(character.classList !="animate"){
    character.classList.add("animate");
    }
    setTimeout(function(){
        character.classList.remove("animate");
    },500);
}

var checkDead = setInterval(function(){
  var characterRight =  parseInt(window.getComputedStyle(character).getPropertyValue("right"));
  var charactertop =  parseInt(window.getComputedStyle(character).getPropertyValue("top"));
  var blockLeft =  parseInt(window.getComputedStyle(block).getPropertyValue("left"));

  if(blockLeft<=100 && blockLeft>0 && charactertop>=558){
    block.style.animation ="none";
    block.style.display ="none";
    alert("You Lose.")
  }
  
},10);


const moveBy = 10; // define the moveBy variable

window.addEventListener('load', () => {
  const character = document.querySelector('.character');
  
  character.style.transform = 'translate(0, 0)';
});

document.addEventListener('keyup', event => {
  // get the element with the class 'character'
  const character = document.querySelector('.character');

  switch (event.key) {
    case 'ArrowLeft':
  
      character.style.transform = `translate(${-moveBy}px, 0)`;
      break;
    case 'ArrowRight':
      // update the object's position to move right
      character.style.transform = `translate(${moveBy}px, 0)`;
      break;
  }
});
