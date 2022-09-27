document.addEventListener("DOMContentLoaded", function(){
    let list = document.querySelectorAll(".item-flex");

    list.forEach(function(item, index){
        item.addEventListener("click", function (){
            this.classList.toggle("open");
        })
    })

    let about_prod = document.querySelector(".about-productions .about-productions-head");

    about_prod.addEventListener('click', function(){
        this.closest('.about-productions').classList.toggle('open');
    })
})