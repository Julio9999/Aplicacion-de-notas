if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}

let d = document;

d.addEventListener('DOMContentLoaded', (e) => {
    let $inputs = d.querySelectorAll('div.password-group input');
    $inputs.forEach(input => {
        input.addEventListener('keyup', (e) => {
            let $button = d.getElementById(input.name);
            if(input.value.length > 0){
                if(!$button.classList.contains('is-active')){
                    $button.classList.add('is-active');
                    $button.addEventListener('click', (e) => {
                        if(input.type == 'password'){
                            input.type = 'text';
                        }else{
                            input.type = 'password';
                        }
                    })
                }
            }else{
                $button.classList.remove('is-active');
            }
        })
    })
})