 function navToggle() {
    let menu = document.getElementById('menu');
    if (menu.style.width == '0px'){
      menu.style.width='100%';
    }
    else {
      menu.style.width=0;
    }
  }