// const toogle = document.getElementById('toggle-mode');
// const body = document.querySelector('body');
// const card = document.querySelectorAll(".card");
// const footer = document.querySelectorAll('.bottom-bar ul li a') 

$('#toggle-mode').click(function(){
    if($('#toggle-mode').hasClass('bi-moon-fill')){
        //dark mode active

        $('#toggle-mode').removeClass('bi-moon-fill').addClass(' bi-brightness-high-fill');
        $('body').css('background-color', 'black');
        $('body').css('color', 'white');
        $('body').css('transition', '2s');
        $('.card').css('box-shadow', 'none');
        $('.bottom-bar').css('border-top','1px solid white ')
        $('.bottom-bar').css('border-bottom','1px solid white ')
        $('.bottom-bar ul li a').css('color','white');


    }else{
    
        
        $('#toggle-mode').removeClass('bi-brightness-high-fill').addClass('bi-moon-fill');
        $('body').css('background-color', 'white');
        $('body').css('color', 'black');
        $('body').css('transition', '2s');
        $('.card').css('box-shadow', '4px 5px 10px 5px  #e9e9e9');
        $('.bottom-bar').css('border-top','1px solid black ')
        $('.bottom-bar').css('border-bottom','1px solid black ')
        $('.bottom-bar ul li a').css('color','black');

        
       
        


    }

})
$('.btn').click(function(){
    
    Swal.fire({
        title: 'Coming Soon!',
        showClass: {
          popup: 'swal2-show',
          
        },
        hideClass: {
          popup: 'swal2-hide'
        }
      })
} ); 


function info(){
    if($('.form-email').css('display') == 'flex'){
        $(".form-email").css('display', 'none')
        
    }
    else{
        $('.form-email').css('display' , 'flex')
       
    }
}

$('.navigation').click(function(){

    if($('#inp').is(':checked')){
        $('html').css('overflow-y', 'hidden');
    }else{
        $('html').css('overflow-y', 'scroll');


    }
   
})
  
