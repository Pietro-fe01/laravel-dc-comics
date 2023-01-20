import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);

const deletingButton = document.querySelectorAll('.button-delete');
const deletingForm = document.querySelectorAll('.form-delete');

deletingButton.forEach((elm, index) => {
    elm.addEventListener('click', function(){
        let res = confirm('By deleting you will not be able to retrieve it anymore. Are you sure?');
        
        if ( res === true ) {
            return deletingForm[index].submit();
        }
    })
});
