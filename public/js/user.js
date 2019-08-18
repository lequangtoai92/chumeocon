function myFunction(id) {
    var r = confirm("Bạn có chắc muốn xóa bài viết này?");
    if (r == true) {
        $.ajax({ url: 'http://chumeocon.com/delete-my-posts/' + id });
    } else {
        txt = "You pressed Cancel!";
    }

}