$('document').ready(function(){
    $('#bookModalOpen').click(function(){
        $('#bookModal').modal('show');
    });
    $('#bookModalClose').click(function(){
        $('#bookModal').modal('hide');
    });

    $('[data-toggle="tooltip"]').tooltip();

    $('#mycarousel').carousel({interval:3000});
    $('#carouselButton').click(function(){
        if($('#carouselButton').children('span').hasClass('fa-pause')){
            $('#mycarousel').carousel('pause');
            
            $('#carouselButton').children('span').removeClass('fa-pause');
            $('#carouselButton').children('span').addClass('fa-play');
            
            $('.carousel-inner').children('button').removeClass('btn-danger');
            $('.carousel-inner').children('button').addClass('btn-success');

            $('.carousel-inner').children('button').tooltip('hide').attr('data-original-title', 'Play').tooltip('fixTitle').tooltip('show');
            




        }
        else if($('#carouselButton').children('span').hasClass('fa-play')){
            $('#mycarousel').carousel('cycle');
            $('#carouselButton').children('span').removeClass('fa-play');
            $('#carouselButton').children('span').addClass('fa-pause');
            $('.carousel-inner').children('button').removeClass('btn-success');
            $('.carousel-inner').children('button').addClass('btn-danger');

            $('.carousel-inner').children('button').tooltip('hide').attr('data-original-title', 'Pause').tooltip('fixTitle').tooltip('show');


        }
    });

    $('#loginModalOpen').click(function(){
        $('#loginModal').modal('show');
    });
    $('#loginModalClose').click(function(){
        $('#loginModal').modal('hide');
    });  

    
    $('#loginModalSignupButton').click(function(){
        $('#loginModal').modal('hide');
        $('#signupModal').modal('show');
    });
    $('#signupModalClose').click(function(){
        $('#signupModal').modal('hide');
    });     


});
