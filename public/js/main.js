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
$(document).ready(function () {
    // Slide
    // $('.owl-carousel.list-news').owlCarousel({
    //     loop: true,
    //     nav: false,
    //     dots: true,
    //     autoplay: true,
    //     autoplayTimeout: 7000,
    //     lazyLoad: true,
    //     autoplayHoverPause: true,
    //     items: 3,
    //     responsive: {
    //         0: {
    //             items: 1,
    //         },
    //         600: {
    //             items: 1,
    //         },
    //         1000: {
    //             items: 3,
    //             dots: false,
    //         }
    //     }
    // });

    $(".owl-carousel.list-news").owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        lazyLoad: true,
        autoplayTimeout: 5000,
        items: 1,
    });

    $(".slider-top-one").owlCarousel({
        animateOut: "fadeOut",
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        lazyLoad: true,
        autoplayTimeout: 5000,
        items: 1,
    });

    $(".slider-top-two").owlCarousel({
        loop: true,
        nav: true,
        items: 3,
        margin: 10,
        autoplay: true,
        dots: false,
        center: true,
        autoplayTimeout: 5000,
        navText: ["", ""]
    });

    $(".slider-top-ranking").owlCarousel({
        loop: true,
        nav: true,
        items: 7,
        margin: 10,
        autoplay: true,
        dots: false,
        center: true,
        autoplayTimeout: 5000,
        navText: ["", ""]
    });
    // Lazy loading
    $(".lazy").unveil(200, function () {
        $(this).load(function () {
            this.style.opacity = 1;
        });
    });
    // Search mobile
    $(".btn-search-mobile").click(function () {
        $(".search-form").addClass("active");
        $("body").addClass("popup-show");
    });
    $(".btn-back").click(function () {
        $(".search-form").removeClass("active");
        $("body").removeClass("popup-show");
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
    $('#select_account_status').val(window.location.href.split('/danh-muc/')[1]);
    $('.menu-categories .categories').on('change', function() {
        window.location.href = "/danh-muc/" + this.value;
      });
});


function tinymce_init() {
    tinymce.init({
        height: 500,
        selector: ".content_main_tinymce",
        plugins: "code link textcolor colorpicker emoticons visualchars searchreplace wordcount charmap anchor textpattern preview image",
        menubar: "edit format insert view image",
        toolbar: 'fontselect | fontsizeselect | undo redo | styleselect image | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor emoticons',
        removed_menuitems: 'newdocument',
        relative_urls: false,
        remove_script_host: false,
        document_base_url: (!window.location.origin ? window.location.protocol + "//" + window.location.host : window.location.origin) + "/",
        image_title: true,
        automatic_uploads: true,
        images_upload_url: 'upload_image',
        file_picker_types: 'image',
        images_upload_handler : function(blobInfo, success, failure) {
			var xhr, formData;
			xhr = new XMLHttpRequest();
			xhr.withCredentials = false;
            xhr.open('POST', 'upload_image');
			xhr.onload = function() {
				var json;
				if (xhr.status != 200) {
					failure('HTTP Error: ' + xhr.status);
					return;
				}
				json = JSON.parse(xhr.responseText);
				if (!json || typeof json.file_path != 'string') {
					failure('Invalid JSON: ' + xhr.responseText);
					return;
				}
				success(json.file_path);
			};
			formData = new FormData();
			formData.append('file', blobInfo.blob(), blobInfo.filename());
			xhr.send(formData);
		},
        file_browser_callback: function (field_name, url, type, win) {
        },
        content_style: ".mce-content-body {font-size:16px;}",
    });
    tinymce.init({
        height: 200,
        width : "100%",
        selector: ".question_content_main_tinymce",
        plugin: 'a_tinymce_plugin',
        a_plugin_option: true,
        content_style: ".mce-content-body {font-size:16px;}",
    });
}


var check = true;
$(document).on("click", ".list-mototube .mototube-items a", function () {
    if (check == true) {
        var iframe = $(this).find("#value_iframe").val();
        $('.list-mototube .mototube-items a').find("iframe").remove();
        $(this).append(iframe);
        $('.list-mototube .mototube-items a').find("iframe").attr('id', 'youtube_play');
        loadYouTubePlayer('youtube_play');
    } else {
        check = true;
    }
});


var player;
loadYouTubePlayer = function (playerID) {
    the_player = new YT.Player(playerID, {
        events: {
            'onReady': playYouTubeVideo,
            'onError': onPlayerError
        }
    });
};
function playYouTubeVideo(event) {
    event.target.playVideo();
}

function onPlayerError(event) {
    console.log('onPlayerError');
}

function function_getid_yotube() {
    $('#modal_getid_yotube').modal('show');
}




