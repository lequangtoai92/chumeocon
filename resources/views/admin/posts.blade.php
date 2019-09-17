@extends('master_admin')
@section('content')
<link rel="stylesheet" href="../css/admin/posts.css">
<section class="wrapper page-admin-posts">
    <div class="media container_page">
    @include('admin.menu_left')
        <div class="media-body">
            <select class="form-control select-option-top" id="select_posts_status">
                <option class="select-option" value="0">Chưa Duyệt </option>
                <option class="select-option" value="1">Đã duyệt</option>
                <option class="select-option" value="2">Xóa</option>
            </select>
            <table id="table_posts" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="th-1">Tên truyện</th>
                        <th class="th-2">Tóm tắt</th>
                        <th class="th-5">Tác giả</th>
                        <th class="th-6">Ngày viết</th>
                        <th class="th-7">Đánh giá</th>
                        <th class="th-8">Duyệt</th>
                        <th class="th-9">Lý do</th>
                        <th class="th-10"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($list_posts as $item)
                    <tr class="td-hover ">
                        <td class="td-1">{{$item->title}}</td>
                        <td class="td-2">{{$item->summary}}</td>
                        <td class="td-5">{{$item->author}}</td>
                        <td class="td-6">{{$item->time_creat}}</td>
                        <td class="td-7">{{$item->num_like}}/{{$item->num_dislike}}</td>
                        <td class="td-8">
                            <select class="form-control select-option" id="select_posts_status_{{$item->id}}">
                                <option class="select-option" disabled value="">Duyệt</option>
                                <option class="select-option" value="1">Chấp nhận</option>
                                <option class="select-option" value="2">Xóa</option>
                            </select>
                        </td>
                        <td class="td-9">
                            <input class="form-control">
                        </td>
                        <td class="td-10">
                            <button class="btn btn-primary">Duyệt</button>
                        </td>
                        <td class="td-12 hide">
                            {{$item}}
                        </td>
					</tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">{{$list_posts->links()}}</div>
        </div>

    </div>
</section>
<!--Footer-->
@include('include.dialog_show_posts')
<script>
$("#select_posts_status").change(function() {
    $.ajax({
        url: '/admin/getFeedback/' + $("#select_posts_status").val()
    });
});

function access_posts(id) {
    $.ajax({
        type: "POST",
        url: '/admin/accessFeedback',
        data: {
            "_token": "{{ csrf_token() }}",
            id: id,
            status: $("#select_posts_status_" + id + "").val()
        },
        success: function() {
            $("#select_posts_status_" + id + "").parent().parent().addClass('hide');
        }
    });
}

$(".td-2").click(function() {
    var data = JSON.parse($(this).parent().find(".td-12").html());
    console.log(data);
    $("#dialog_show_feedback .id").text(data.id);
    $("#dialog_show_feedback .id_account").text(data.id_account);
    $("#dialog_show_feedback .name_author").text(data.name_author);
    $("#dialog_show_feedback .content").text(data.content);
    $("#dialog_show_feedback .browser").text(data.browser);
    $("#dialog_show_feedback .driver").text(data.driver);
    $("#dialog_show_feedback .version").text(data.version);
    $("#dialog_show_feedback .time_creat").text(data.time_creat);
    $("#dialog_show_feedback .status").text(data.status);
    document.getElementById('dialog_show_feedback').showModal();
});

$(".close-dialog").click(function() {
    document.getElementById('dialog_show_feedback').close();
});

</script>
@endsection