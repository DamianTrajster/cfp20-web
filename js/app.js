/* GO TOP */
window.onscroll = function() {
    if(document.documentElement.scrollTop > 100 ){
        document.querySelector('.go-top-container').classList.add('show1')
    }else {
        document.querySelector('.go-top-container').classList.remove('show1')
    }
}

document.querySelector('.go-top-container')
.addEventListener('click', ()=> {
    window-scrollTo({
        top:0,
        behavior:'smooth'
    })
})



/* GALERIA DE IMAGENES */

const fulImgBox = document.getElementById("fulImgBox"),
fulImg = document.getElementById("fulImg")

function closeImg() {
    fulImgBox.style.display = "none";
}

function openFulImg(reference){
    fulImgBox.style.display = "flex";
    fulImg.src = reference;
}



/* SLIDER */

$(document).ready(function () {
    //Owl
  
    $('#project-slider').owlCarousel({
        loop: true,
        nav: false,
        items: 2,
        dots: true,
        smartSpeed: 600,
        center: true,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
                margin: 8,
            }
        }
    })

   
});








