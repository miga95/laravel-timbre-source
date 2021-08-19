import Splide from '@splidejs/splide';

window.onload = function(){
    new Splide( '.splide', {
        type   : 'loop',
        perPage: 3,
        focus  : 'center',
    } ).mount();
}
