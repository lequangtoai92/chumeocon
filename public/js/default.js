function checkNull(string) {
    if (!!string && string.trim().length == 0) {
        return false;
    } else {
        return string;
    }
}

function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};

//input: Date object -> dd-MM-yyyy
function get_ddMMyyyy(value) {
    if (value == 'now') {
        return 'Mới xong';
    } else if (value !== null) {
        var date = value.substr(0, 10).split("-");
        return date[2] + "-" + date[1] + "-" + date[0];
    }
}

function convert_age(data) {
    if (!!data) {
        if (data == 1) {
            return 'Mần';
        } else if (data == 2) {
            return 'Chồi';
        } else if (data == 3) {
            return 'Lá';
        } else {
            return 'Măng non';
        }
    }
}

function showLoading() {
    $(".box-loading").css('visibility', 'visible');
}

function hideLoading() {
    $(".box-loading").css('visibility', 'hidden');
    $(".item-in-here").css('visibility', 'visible');
}
function showAlert(data) {
    if(data == 2) {
        $(".alert-success-update").css('visibility', 'visible');
        $(".alert-success-update").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-success-update").slideUp(500);
        });
    } else if(data == 1) {
        $(".alert-success-creat").css('visibility', 'visible');
        $(".alert-success-creat").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-success-creat").slideUp(500);
        });
    } else if(data == 3) {
        $(".alert-success-delete").css('visibility', 'visible');
        $(".alert-success-delete").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-success-delete").slideUp(500);
        });
    } else if(data == 'I') {
        $(".success-info").css('visibility', 'visible');
        $(".success-info").fadeTo(2000, 500).slideUp(500, function(){
            $(".success-info").slideUp(500);
        });
    } else if(data == 'W') {
        $(".success-warning").css('visibility', 'visible');
        $(".success-warning").fadeTo(2000, 500).slideUp(500, function(){
            $(".success-warning").slideUp(500);
        });
    } else if(data == 4) {
        $(".success-danger").css('visibility', 'visible');
        $(".success-danger").fadeTo(2000, 500).slideUp(500, function(){
            $(".success-danger").slideUp(500);
        });
    }
}

function notLogin() {
    alert("Hãy bổ sung thông tin để sử dụng chức năng này");
}

$(".btn-close-admin-modal").click(function () {
    $(".admin-modal-show-content").removeClass("show");
    $(".admin-modal-show-content").css("display", "");
})

