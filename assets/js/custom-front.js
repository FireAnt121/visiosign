$(document).ready(function(){

    $('.video').parent().click(function () {
        if($(this).children(".video").get(0).paused){
            $(this).children(".video").get(0).play();
            $(this).children(".playpause").fadeOut();
        }else{
           $(this).children(".video").get(0).pause();
            $(this).children(".playpause").fadeIn();
        }
    });
    $(window).on("load resize", function() {
        $('.cta .carousel , .testimon .carousel.hide-until-9').each(function(i, obj) {
            let m = 0;

            $(this).find('.carousel-inner .carousel-item').each(function(e){

                m = ($(this).innerHeight() > m)? $(this).innerHeight() : m;
            });
            $(this).children().find('.carousel-item ').attr('style','height:'+m+'px');
        });
        if (this.matchMedia("(max-width: 991px)").matches) {
  		$('.clicker').click(function(){
            $new_left = $(this).css('left');
            $old_top = parseInt($(this).css('top'), 10);
            
            let p_h = $(this).parent().height();
            let new_V = p_h - $old_top;
          	$(this).children('.c-info').attr('style','left:-'+$new_left+';margin-left:5vw !important;top:'+new_V+'px !important;');
        });
    }
    });
    $('#fire-first').on("input",function(){
    if($('#fire-first').val() !== ''){
        $('#fire-first').css({
            'border': 'none'
        });
    }
});
$('#fire-second').on("input",function(){
    if($('#fire-second').val() !== ''){
        $('#fire-second').css({
            'border': 'none'
        });
    }
});
    $('#fire-floater-form button').click(function(){

        if($('#fire-first').val() === '' || $('#fire-first').val() === null){
            $('#fire-first').css({
                'border': '2px solid #f00'
            });
        }
        if($('#fire-second').val() === '' || $('#fire-second').val() === null){
            $('#fire-second').css({
                'border': '2px solid #f00'
            });
        }
    });
});