var openBtn = document.getElementById('icone-menu-b');
var closeBtn = document.getElementById('icone-menu-h');
var sideMenu = document.getElementById('menu-hide');

openBtn.addEventListener("click", ()=>{
    sideMenu.classList.add("active");
        })

closeBtn.addEventListener("click", ()=>{
            sideMenu.classList.remove("active");
                })