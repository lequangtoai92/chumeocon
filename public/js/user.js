var num_posts;
var this_posts;
$(document).on("click", ".news-items", function() {
    this_posts = $(this);
});
function function_delete_posts(id, title) {
    // alert($(this));
    $(".name-posts").text(title);
    num_posts = id;
    $('#modal_delete_posts').modal('show');
}



$("#modal_btn_yes").on("click", function () {
    $.ajax({ url: '/delete-my-posts/' + num_posts });
    this_posts.addClass('hide');
    $('#modal_delete_posts').modal('hide');
});
