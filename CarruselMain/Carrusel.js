let carrusel = async () =>{
    let items = document.querySelectorAll('.itemCarrusel');//Array with all carrusel elements
    let timeShowingEl = 3000;//Time  to showing the  ItemCarrusel, dont forget sum with timeKeepLastEl
    let timeKeepLastEl = 4000;//Need to have the same time that CSS properti setted in '.itemCarrusel' -> transition: all 500ms;
                             //Time  to keep  showing the  ItemCarrusel to dont see the  container Element ".carrusel" 
                             

    while (true) {
        for (let i = 0; i < items.length; i++) {
            if( i==0){
                items[0].classList.remove( 'position');
            }

            let element = items[i];
            element.classList.remove( 'hideItemCarrusel');
            element.classList.add( 'animationImg','blur');
            await sleep(timeShowingEl); 
           
            if(i == items.length-1){
                items[0].classList.add( 'position','animationImg','blur');
                items[0].classList.remove( 'hideItemCarrusel');
            }
            else{
                items[i+1].classList.remove( 'hideItemCarrusel');
                items[i+1].classList.add( 'animationImg','blur');
            }
            await sleep(timeKeepLastEl);
            element.classList.remove( 'animationImg','blur');
            element.classList.add( 'hideItemCarrusel');
        }
    }
}

let sleep = (ms) => {
    return new Promise(resolve => setTimeout(resolve, ms));
}

document.addEventListener('DOMContentLoaded', function(event) {
  //the event occurred
  carrusel(); 
})

