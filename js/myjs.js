/* 

 $(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() == $('#home').height()) {
           $(window).show('hehehe');
            $("ul li").css({ 'border-bottom': '1px solid #F76464' });
        }
       
       else if ($(window).scrollTop() == $('#about').height()) {
            $("ul li").css({ 'border-bottom': '1px solid #57bc90' });
        }
         else {
            $("ul li").css({ 'border-bottom': '1px solid black' });
        } 

    })
})  */


/**
 * This was built using the scrollie jQuery Plugin
 * https://github.com/Funsella/jquery-scrollie
 */


/*  $(window).ready(function () {

     var wHeight = $(window).height();

     $('.slide')
         .height(wHeight)
         .scrollie({
             scrollOffset: -50,
             scrollingInView: function (elem) {

                 var bgColor = elem.data('li');

                 $('navi').css('background-color', bgColor);

             }
         });

 }) */

$(document).ready(function () {
    $("#home").scroll(function () {
        $("ul li").css({ 'border-bottom': '1px solid #ffffff' });
    });
});