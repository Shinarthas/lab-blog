/**
 * Created by Lenovo on 29.12.2016.
 */
$('.mlist a.link').click(function (e) {
   // console.log($(document).scrollTop());
    localStorage.setItem('scrollItem',$(document).scrollTop());
    //e.preventDefault();
});
$( document ).ready(function() {
    if(localStorage.scrollItem){
    $("html, body").animate({ scrollTop: localStorage.scrollItem }, 400);
        localStorage.removeItem('scrollItem');
    }
});