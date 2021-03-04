$(document).ready(function(){
    // Here we put all the code
    var heart = $('.heart'),
        cog = $('#cog'),
        popUp = $('.popUp'),
        closePopUp = $('#closePopUp'),
        cancelPopUp = $('#cancelPopUp');

    heart.click(function(){
        $(this).toggleClass('fa-heart-o');
        $(this).toggleClass('heart-red fa-heart');
        var pid = $(this).data('post_id');
        alert(pid);
        $.ajax({
            url:'/Instagram/models/like.php',
            type:'POST',
            data:{post_id:pid},
            success:function(response)
            {
                $('#get_lk').val(response);
            }
        });
    });

    cog.click(function(){
        popUp.fadeIn(500);
    })

    closePopUp.click(function(){
        popUp.fadeOut(500);
    })

    cancelPopUp.click(function(){
        popUp.slideUp(500)
    })

})