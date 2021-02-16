$(document).ready(function(){

    $('.button1').click(function(){
        $('.ac, .ab').toggle(function(){
            $('.ac').addClass("display:block");
        })
        

    });
    $('.button2').click(function () {
        $('.ac, .bc').toggle(function () {
            $('.bc').addClass("display:block");
        })


    });
    $('.button3').click(function () {
        $('.ac, .cd').toggle(function () {
            $('.cd').addClass("display:block");
        })


    });
    $('.button4').click(function () {
        $('.ac, .de').toggle(function () {
            $('.de').addClass("display:block");
        })


    });
    $('.button5').click(function () {
        $('.ac, .ef').toggle(function () {
            $('.ef').addClass("display:block");
        })


    });
    $('.button6').click(function () {
        $('.ac, .fg').toggle(function () {
            $('.fg').addClass("display:block");
        })


    });

});