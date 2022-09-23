

var openBtn = document.getElementById('icone-menu-b');
var closeBtn = document.getElementById('icone-menu-h');
var sideMenu = document.getElementById('menu-hide');

openBtn.addEventListener("click", ()=>{
    sideMenu.classList.add("active");
        })

closeBtn.addEventListener("click", ()=>{
            sideMenu.classList.remove("active");
                })

/* Curseur spécial. 

const cursor = document.querySelector('.cursor');

document.addEventListener("mousemove", (e)=>{
    cursor.setAttribute('style', 'top:'+(e.pageY - 15)+'px; left:'+(e.pageX - 15)+'px;')
})

document.addEventListener("click", ()=>{
    cursor.classList.add('expand');

    setTimeout(()=>{
        cursor.classList.remove('expand');
    }, 500);
})
*/