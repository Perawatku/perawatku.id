$(function(){
                
    $('.faq').on('click', function(e){

        e.preventDefault();

        $(this).children().slideToggle(200, function(){

            $('.faq').show();
            
        });

    });

});

$(window).scroll(function(){
    
    if($(document).scrollTop() > 50 ){
        
        $('.navbar-menu').addClass('shrink');
        
    } else {
        
        $('.navbar-menu').removeClass('shrink');
        
    }
    
});
    
$('.iconx').click(function(){

        $(this).toggleClass('active-bar');;

});