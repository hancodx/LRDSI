
// slider 1
let slid1_items = document.querySelectorAll('.slider .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
next.innerText = ">";
prev.innerText = "<";
let slid1_active = 0;

loadShow(slid1_items,slid1_active);
next.onclick = function(){
    slid1_active = slid1_active + 1 < slid1_items.length ? slid1_active + 1 : slid1_active;
    loadShow(slid1_items,slid1_active);
}
prev.onclick = function(){
    slid1_active = slid1_active - 1 >= 0 ? slid1_active - 1 : slid1_active;
    loadShow(slid1_items,slid1_active);
}



// slider 2
let slid2_items = document.querySelectorAll('.slider2 .item');

    let next2 = document.getElementById('next2');
    let prev2 = document.getElementById('prev2');
    next2.innerText = ">";
    prev2.innerText = "<";
    
    let slid2_active = 0;
    loadShow(slid2_items,slid2_active);
    next2.onclick = function(){
        slid2_active = slid2_active + 1 < slid2_items.length ? slid2_active + 1 : slid2_active;
        loadShow(slid2_items,slid2_active);
    }
    prev2.onclick = function(){
        slid2_active = slid2_active - 1 >= 0 ? slid2_active - 1 : slid2_active;
        loadShow(slid2_items,slid2_active);
    }


    // slider 3
let slid3_items = document.querySelectorAll('.slider3 .item');

let next3 = document.getElementById('next3');
let prev3 = document.getElementById('prev3');
next3.innerText = ">";
prev3.innerText = "<";

let slid3_active = 0;
next3.onclick = function(){
    slid3_active = slid3_active + 1 < slid3_items.length ? slid3_active + 1 : slid3_active;
    loadShow(slid3_items,slid3_active);
}
prev3.onclick = function(){
    slid3_active = slid3_active - 1 >= 0 ? slid3_active - 1 : slid3_active;
    loadShow(slid3_items,slid3_active);
}
loadShow(slid3_items,slid3_active);



    // function
    function loadShow(items,active){
        let stt = 0;
        if(!items[active]) return;
        items[active].style.transform = `none`;
        items[active].style.zIndex = 1;
        items[active].style.filter = 'none';
        items[active].style.opacity = 1;
        for(var i = active + 1; i < items.length; i++){
            stt++;
            items[i].style.transform = `translateX(${120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(-1deg)`;
            items[i].style.zIndex = -stt;
            items[i].style.filter = 'blur(5px)';
            items[i].style.opacity = stt > 2 ? 0 : 0.6;
        }
        stt = 0;
        for(var i = active - 1; i >= 0; i--){
            stt++;
            items[i].style.transform = `translateX(${-120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(1deg)`;
            items[i].style.zIndex = -stt;
            items[i].style.filter = 'blur(5px)';
            items[i].style.opacity = stt > 2 ? 0 : 0.6;
        }
    }