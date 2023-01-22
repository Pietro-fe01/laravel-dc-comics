import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);

const modalDeleteBtn = document.querySelectorAll('.modal-delete-btn');
const modalForm = document.querySelector('.modal-form');
const whichComic = document.getElementById('which-one');

modalDeleteBtn.forEach(elm => { 
    elm.addEventListener('click', function(){
        modalForm.action = "";
        const id = elm.getAttribute('data-id');
        modalForm.action += `/${id}`;
        whichComic.innerHTML = `record with id number ${id}.`;
    })
});
