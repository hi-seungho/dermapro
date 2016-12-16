$(function(){

  init();

})//endfunction



function init() {
 familysite();
}


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


$(function(){

$("ul.sub_menu").hide();
$("ul.menu li").hover(function(){
		$("ul:not(:animated)",this).slideDown("fast");
	},
	function(){
		$("ul",this).slideUp("fast");
	});
    
}); 


// 
// $(function () {
// 
	// $('#MainMenu').mouseenter(function () {
		// $('.sub_box').slideDown();
		// $('.sub_box li').addClass('on');
		// $('.sub_box li').removeClass('on');
// 		
	// });
// 
	// $('#container').mouseenter(function () {
		// subUp();
	// });
	// $('#lay_container').mouseenter(function () {
		// subUp();
	 // });
// 
// function subUp() {
	// $('.sub_box').stop().slideUp();
// }
// 
// });



$(function(){
    $( '#top' ).click( function() {
      $( 'html, body' ).animate( { scrollTop : 0 }, 400 );
      return false;
    });
})



