document.addEventListener("DOMContentLoaded", function(){
    let list = document.querySelectorAll(".item-flex");

    list.forEach(function(item, index){
        item.addEventListener("click", function (){
            this.classList.toggle("open");
        })
    })
})