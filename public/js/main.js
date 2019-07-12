// Js menu mobile
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("main").classList.add("side-nav-open");
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("main").classList.remove("side-nav-open");
}
$(document).ready(function(){
    // Slide
    $('.owl-carousel').owlCarousel({
        loop:true,
        nav:false,
        dots: true,
        autoplay:true,
        autoplayTimeout:7000,
        lazyLoad:true,
        autoplayHoverPause:true,
        items:3,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1,
            },
            1000:{
                items:3,
                dots: false,
            }
        }
    });
    // Lazy loading
    $(".lazy").unveil(200, function() {
        $(this).load(function() {
            this.style.opacity = 1;
        });
    });
    // Search mobile
    $(".btn-search-mobile").click(function(){
        $( ".search-form" ).addClass("active");
        $( "body" ).addClass("popup-show");
    });
    $(".btn-back").click(function(){
        $( ".search-form" ).removeClass("active");
        $( "body" ).removeClass("popup-show");
    });

    // Scroll to top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            $('#gotop').fadeIn();
        } else {
            $('#gotop').fadeOut();
        }
    });
    $('#gotop').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    showDialog();
});

function showDialog(){
    var updateButton1 = document.getElementById('openInfo');
    var favDialog1 = document.getElementById('dialog_intro');
    updateButton1.addEventListener('click', function() {
        favDialog1.showModal();
  });

    var updateButton = document.getElementById('openChangePW');
    var favDialog = document.getElementById('dialog_change_pw');
    updateButton.addEventListener('click', function() {
    favDialog.showModal();
  });
}

