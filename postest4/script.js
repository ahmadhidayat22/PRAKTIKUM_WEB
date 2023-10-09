var oldSrc = './assets/moon.png';
var newSrc = './assets/sun.png';

$('#toogle-mode').click(function(){
    // $('img[src="' + oldSrc + '"]').attr('src', newSrc);
    
    if($('img').attr('src') == oldSrc){
    //     //dark mode active
    // alert("kuy")
        $('img[src="' + oldSrc + '"]').attr('src', newSrc);
        $('body').css('background-color', 'black');
        $('body').css('color', 'white');
        $('body').css('transition', '2s');
        $('.card').css('box-shadow', 'none');
        $('.bottom-bar').css('border-top','1px solid white ')
        $('.bottom-bar').css('border-bottom','1px solid white ')
        $('.bottom-bar ul li a').css('color','white');


    }else{
        $('img[src="' + newSrc + '"]').attr('src', oldSrc);
        $('body').css('background-color', 'white');
        $('body').css('color', 'black');
        $('body').css('transition', '2s');
        $('.card').css('box-shadow', '4px 5px 10px 5px  #e9e9e9');
        $('.bottom-bar').css('border-top','1px solid black ')
        $('.bottom-bar').css('border-bottom','1px solid black ')
        $('.bottom-bar ul li a').css('color','black');

        
    }
        
})

const btn_b = document.getElementById('btn-book')

btn_b.addEventListener('click' , function(){
    alert("Coming Soon!")

})



function info(){
    if($('.form-email').css('display') == 'flex'){
        $(".form-email").css('display', 'none')
        $(".form-email").css('transition', '2s');
        
    }
    else{
        $('.form-email').css('display' , 'flex')
       
    }
}





$('.navigation').click(function(){

    if($('#inp').is(':checked')){
        console.log($(inp));
        $('.hamburger-menu').css('position', 'fixed');


    }else{
        $('.hamburger-menu').css('position', 'absolute');
        

        // $('html').css('overflow-y', 'scroll');


    }
   
})
  
