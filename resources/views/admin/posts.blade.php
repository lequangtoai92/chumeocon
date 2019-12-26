@extends('master_admin')
@section('content')
<link rel="stylesheet" href="{!! assetRemote('css/admin/posts.css') !!}">
<section class="wrapper page-admin-posts">
    <div class="media container_page">
    @include('admin.menu_left')
        <div class="media-body">
            <select class="form-control select-option-top" id="select_posts_status">
                <option class="select-option" value="1">Tất cả</option>
                <option class="select-option" value="5">Đã duyệt</option>
                <option class="select-option" value="6">Chờ duyêt</option>
                <option class="select-option" value="7">Bài nháp</option>
                <option class="select-option" value="8">Tạm khóa</option>
                <option class="select-option" value="9">Xóa vĩnh viển</option>
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
                                <option class="select-option" value="5">Duyệt</option>
                                <option class="select-option" value="8">Tạm khóa</option>
                                <option class="select-option" value="9">Xóa vĩnh viển</option>
                            </select>
                        </td>
                        <td class="td-9">
                            <input class="form-control">
                        </td>
                        <td class="td-10">
                            <button class="btn btn-primary" onclick="access_posts({{$item->id}})">Duyệt</button>
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
$('#select_posts_status').val(window.location.href.split('/admin/post/')[1]);
$('#select_posts_status').on('change', function() {
    window.location.href = "/admin/post/" + this.value;
});
$("#select_posts_status").change(function() {
    $.ajax({
        url: '/admin/getPostsStatus/' + $("#select_posts_status").val()
    });
});

function access_posts(id) {
    $.ajax({
        type: "POST",
        url: '/admin/accessPostsStatus',
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

$(".td-1").click(function() {
    var data = JSON.parse($(this).parent().find(".td-12").html());
    console.log(data);
    $("#dialog_show_posts .id").text(data.id);
    $("#dialog_show_posts .id_account").text(data.id_account);
    $("#dialog_show_posts .name_author").text(data.name_author);
    $("#dialog_show_posts .content").text(data.content);
    $("#dialog_show_posts .browser").text(data.browser);
    $("#dialog_show_posts .driver").text(data.driver);
    $("#dialog_show_posts .version").text(data.version);
    $("#dialog_show_posts .time_creat").text(data.time_creat);
    $("#dialog_show_posts .status").text(data.status);
    document.getElementById('dialog_show_posts').showModal();
});

$(".close-dialog").click(function() {
    document.getElementById('dialog_show_posts').close();
});

</script>
@endsection