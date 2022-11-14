document.addEventListener("DOMContentLoaded", function(){
    let list = document.querySelectorAll(".item-flex");

    list.forEach(function(item, index){
        item.addEventListener("click", function (){
            this.classList.toggle("open");
        })
    })

    let about_prod = document.querySelector(".about-productions .about-productions-head");
    if (about_prod){
        about_prod.addEventListener('click', function(){
            this.closest('.about-productions').classList.toggle('open');
        })
    }

    let about_bitum = document.querySelector(".about-description-item-bitumen"),
        black_block = document.querySelector(".about-description-block-bottom");
        if (about_bitum){
            about_bitum.addEventListener('click', () => {
                black_block.classList.toggle('open');
            });
        }
      



    let lang = document.querySelector('.header-main-block__language');

    lang.addEventListener('change', function(){
        window.location.href = this.value;
    });
   
})