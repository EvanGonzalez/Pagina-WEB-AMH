const main_img = document.querySelector('.main_img')
const thumbnails = document.querySelectorAll('.thumbnail')


thumbnails.forEach(thumb => {
    thumb.addEventListener('click', function(){ /*se utiliza para al momento de dar clip este sea seleccionado*/
        const active = document.querySelector('.active')
        active.classList.remove('active')/*al momento de activar una de las imagenes este metodo removera el anterior y seleccionara el nuevo elemento*/
        thumb.classList.add('active')
        main_img.src = thumb.src
    })
})