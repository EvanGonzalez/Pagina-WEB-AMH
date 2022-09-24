var contmovil = document.getElementById('contmovil');
var altura = contmovil.offsetTop;
window.addEventListener('scroll', function () {
    if (window.pageYOffset > altura) {
        contmovil.classList.add('fixed');
    } else {
        contmovil.classList.remove('fixed');
    }
})