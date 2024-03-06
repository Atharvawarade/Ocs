const counters = document.querySelectorAll('.count');


counters.forEach((counter) => {
  const updateCount = () => {
    const target = parseInt(counter.getAttribute('data-target'));
    let speed; // Declare speed variable outside the if blocks
    if(target <= 10){
      speed = 5;
    }
    if(target <= 30 && target>10){
      speed = 10;
    }
    else if(target <= 100 && target > 30){
      speed = 20;
    }
    else if(target <= 300 && target > 100){
      speed = 50;
    }
    else if(target <= 700 && target > 300){
      speed = 150;
    }
    else{
      speed = 200;
    }
    
    const count = parseInt(counter.innerText);
    const increment = Math.trunc(target / 
    speed);

    if (count < target) {
      counter.innerText = count + increment;
      setTimeout(updateCount, 1);
    } else {
      counter.innerText = target;
    }
  };
  updateCount();
});