

//window.addEventListener('load', function (){
$(document).ready(function() {
    $('.nav-toggle,.back_bg').click(function(e) {
                $('.nav-toggle').toggleClass('active');
                $('body').toggleClass('offcanvas-visible');
                e.stopPropagation();
                return false;
    })

})  