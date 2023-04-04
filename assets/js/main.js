var typed = new Typed('.typer', {
    strings: ['Developer.', 'Designer.', 'Gamer.'],
    typeSpeed: 100,
    backSpeed: 100,
    loop: true
});

let valueNumber=document.querySelectorAll(".exp-number");
let interval = 2000;
valueNumber.forEach((valueNumber) => {
    let startValue = 0;
    let endValue = parseInt(valueNumber.getAttribute("data-val"));
    let duration = Math.floor(interval/endValue);
    let counter = setInterval(() =>{
        startValue += 1;
        valueNumber.textContent=startValue;
        if(startValue==endValue){
            clearInterval(counter);
        }
    },duration)
});