var openBtn = document.getElementById('button-menu-burger');
var closeBtn = document.getElementById('button-menu-hide');
var sideMenu = document.getElementById('menu-hide');

openBtn.addEventListener("click", ()=>{
    sideMenu.classList.add("active");
        })

closeBtn.addEventListener("click", ()=>{
            sideMenu.classList.remove("active");
                })