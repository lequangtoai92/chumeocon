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

    // showDialog();
    tinymce_init();

    $('[data-toggle="datepicker-birthday"]').datepicker();
});


function tinymce_init(){
    tinymce.init({
        height: 500,
        selector: "#content_main",
        plugins: "image code link textcolor colorpicker emoticons visualchars searchreplace wordcount charmap anchor textpattern preview",
        menubar: "edit format insert view image",
        toolbar: 'fontselect | fontsizeselect | undo redo | styleselect image | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor emoticons',
        removed_menuitems: 'newdocument',
        relative_urls: false,
        remove_script_host: false,
        document_base_url: (!window.location.origin ? window.location.protocol + "//" + window.location.host : window.location.origin) + "/",
        file_browser_callback: function (field_name, url, type, win) { },
      });
}

