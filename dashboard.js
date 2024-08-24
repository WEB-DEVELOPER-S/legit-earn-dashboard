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

