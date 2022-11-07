//document.addEventListener("DOMContentLoaded", function(){
/**
 * Первый параметр - это текст или элемент
 * Показывать кнопку закрытия
 * Событие при закрытии
 */
    function ShowModal(item = "", closeBtn = true, openHandler = () => {}, closeHandler = () => {}){
        var body = document.querySelector("body");

        var background = document.createElement("div");
        var container = document.createElement("div");
        var content = document.createElement("div");
        var btn_container = document.createElement("div");
        var btn = document.createElement("div");

        
        background.classList.add("stt-background");
        container.classList.add("stt-container");
        content.classList.add("stt-content");
        btn_container.classList.add("stt-btn_container");
        btn.classList.add("stt-btn");

        if (typeof item === "string" || item instanceof String || typeof item === "number" || item instanceof Number) {
            var dupNode = item;
    
        } else {
            var dupNode = item.cloneNode(true);
    
        }
        content.append(dupNode);

        container.append(content);
 
        btn.innerText = "Закрыть";
        if (closeBtn){
            btn_container.append(btn);
        }
        container.append(btn_container);

      
        //modal.style = "position: fixed; left: 0; top: 0; width: 100%; height: 100%; background-color: #00000024; z-index: 999; display: flex; justify-content: center; align-items: center";
        //background.style = "width: 100%; height: 100%";
        //content.style = "width: 400px; height: 300px; position: absolute; background-color: #fff";


        if (document.querySelector(".stt-modal")){

            var modal = document.querySelector(".stt-modal");
            modal.innerHTML = "";
            modal.append(background, container);
            modal.style = "display:flex";
            btn.addEventListener("click", function(){
                modal.style = "display: none"; 
                
                closeHandler();
                
            });
            background.addEventListener("click", function(){
                modal.style = "display: none"; 
           
                closeHandler();
                
            });

        } else {
            var modal = document.createElement("div");
            modal.classList.add("stt-modal");
            modal.append(background, container);
            modal.style = "display:flex";
            btn.addEventListener("click", function(){
                modal.style = "display: none"; 
         
                closeHandler();
                
            });
            background.addEventListener("click", function(){
                modal.style = "display: none"; 
   
                closeHandler();
                
            });
            body.append(modal);
        }
        //
    }

    function LoadedModal(close = false){
        var body = document.querySelector("body");
        var background = document.createElement("div");
        var container = document.createElement("div");
        var loaded = document.createElement("img");

        background.classList.add("stt-background");
        container.classList.add("load-container");

        loaded.setAttribute("src", "img/loaded.gif")

        container.append(loaded);

        if (document.querySelector(".stt-modal")){

            var modal = document.querySelector(".stt-modal");
            modal.innerHTML = "";
            modal.append(background, container);
            modal.style = "display:flex";
            if (close){
                modal.style = "display: none"; 
            } else {
                modal.style = "display: flex"; 
            }

        } else {
            var modal = document.createElement("div");
            modal.classList.add("stt-modal");
            modal.append(background, container);
            modal.style = "display:flex";
            if (close){
                modal.style = "display: none"; 
            } else {
                modal.style = "display: flex"; 
            }

            body.append(modal);
        }
    }
//});