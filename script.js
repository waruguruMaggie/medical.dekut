const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLink = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', ()=>{
    navbarLink.classList.toggle('active')
})

// Select Menu Script
let selectField = document.getElementById('selectField');
let selectText = document.getElementById('selectText');
let options = document.getElementsByTagName("li");
let list = document.getElementById('list');
let arrowIcon = document.getElementById('arrowIcon');

for (options of options){
    options.onclick = function (){
        selectText.innerHTML = this.textContent;
        list.classList.toggle('hide');
        arrowIcon.classList.toggle('rotate');
    }
}

selectField.onclick = function (){
    list.classList.toggle('hide');
    arrowIcon.classList.toggle('rotate');
}
// Medic selection script
