'use strict'
{
   //アコーディオン
    const menu = document.querySelectorAll(".js__acordion--target");
 
    function toggle() {
      const content = this.nextElementSibling;
      this.classList.toggle("js__is--active");
      content.classList.toggle("js__is--open");
    }

    for (let i = 0; i < menu.length; i++) {
      menu[i].addEventListener("click", toggle);
    }


    //ハンバーガーメニュー
function hamburger(){
  document.getElementById('line1').classList.toggle('linea');
  document.getElementById('line2').classList.toggle('lineb');
  document.getElementById('line3').classList.toggle('linec');
  document.getElementById('target').classList.toggle('slidex');
  document.getElementById('nav_f').classList.toggle('fadein');
  document.getElementById('mask').classList.toggle('mask');
}

document.getElementById('target').addEventListener('click',()=>{
  hamburger();
});

document.getElementById('mask').addEventListener('click',()=>{
  hamburger();
});

// document.getElementById('nav-service-btn').addEventListener('click',()=>{
//   hamburger();
// });
// document.getElementById('nav-living-btn').addEventListener('click',()=>{
//   hamburger();
// });
// document.getElementById('nav-qa-btn').addEventListener('click',()=>{
//   hamburger();
// });
// document.getElementById('nav-access-btn').addEventListener('click',()=>{
//   hamburger();
// });




let list =document.getElementsByClassName('list');

for(let i =0; i < list.length; i++){
  list[i].addEventListener('click',()=>{
      hamburger();
  });
}

//料金 横スクロール
new ScrollHint('.js-scrollable');

}