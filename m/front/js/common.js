$(function() {
    $('.togglebtn_menu').click(function() {
        if ($(this).is('.active') == false) {
            $('#contents').animate({
                right: '335'
            });
            $('#lnb').animate({
                right: '0'
            });
            $(this).addClass('active');
        } else {
            $('#contents').animate({
                right: '0'
            });
            $('#lnb').animate({
                right: '-335'
            });
            $(this).removeClass('active');
        }
    });

    $( "#location_wrap .current_location" ).click(function() {
        $( "#location_wrap .options" ).slideToggle({
            duration: 300
        });
    });

    familysite();


    function familysite(){

       var th = $(".famliysite .family_list").css("height")
         var isPlay = false

         $(".famliysite .family_list").css("height","0")
         $(".famliysite").on("click",function(){
            if(isPlay){
             $(".famliysite .family_list").animate({"height":"0px"},400)
             isPlay  = false
            }else{
             $(".famliysite .family_list").animate({"height":"70px"},400)
             isPlay  = true
            }
          return false

         })

    }
})
