function displayNone(){
    let x = document.getElementById('welcomeCard')
    x.style.display="none"   
}

function displayWithdraws() {
    let list = document.getElementById('list-dots');
    let chevron = document.getElementById('chevron-icon');
    
    list.classList.toggle('active');
    if (list.classList.contains('active')) {
        chevron.classList.remove('bx-chevron-right');
        chevron.classList.add('bx-chevron-down');
    } else {
        chevron.classList.remove('bx-chevron-down');
        chevron.classList.add('bx-chevron-right');
    }
}

function displayLevels() {
    let list = document.getElementById('list-levels')
    let chevron = document.getElementById('chevron-icon-levels')

    list.classList.toggle('active-level')
    if(list.classList.contains('active-level')){
        chevron.classList.remove('bx-chevron-right')
        chevron.classList.add('bx-chevron-down')
    } else {
        chevron.classList.remove('bx-chevron-down')
        chevron.classList.add('bx-chevron-right')
    }
}

function displayMenu() {
    let menu = document.getElementById('menu');
    let overlay = document.querySelector('.menu-overlay');
    let body = document.body;

    // Toggle the menu and overlay
    if (menu.classList.contains('open')) {
        menu.classList.remove('open');
        overlay.style.display = 'none';
        body.classList.remove('menu-open');
    } else {
        menu.classList.add('open');
        overlay.style.display = 'block';
        body.classList.add('menu-open');
    }
}
