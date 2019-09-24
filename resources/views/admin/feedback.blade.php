@extends('master_admin')
@section('content')
<link rel="stylesheet" href="{!! assetRemote('css/admin/feedback.css') !!}">
<section class="wrapper page-admin-feedback">
    <div class="media container_page">
        @include('admin.menu_left')
        <div class="media-body">
            <select id="select_feedback" class="form-control select-option-top">
                <option class="select-option" value="7">Chưa Duyệt </option>
                <option class="select-option" value="6">Đã duyệt</option>
                <option class="select-option" value="9">Đã xóa</option>
            </select>
            <table id="table_feedback" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="th-1">Người viết</th>
                        <th class="th-2">Nội dung</th>
                        <th class="th-3">Thiết bị</th>
                        <th class="th-4">Trình duyệt</th>
                        <th class="th-5">Phiên bản</th>
                        <th class="th-6">Ngày viết</th>
                        <th class="th-7">Duyệt</th>
                        <th class="th-8"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list_feedback_admin as $item)
                    <tr class="td-hover ">
                        <td class="td-1">{{$item->name_author}}</td>
                        <td class="td-2">{{$item->content}}</td>
                        <td class="td-3">{{$item->driver}}</td>
                        <td class="td-4">{{$item->browser}}</td>
                        <td class="td-5">{{$item->version}}</td>
                        <td class="td-6">{{$item->time_creat}}</td>
                        <td class="td-7">
                            <select class="form-control select-option" id="select_feedback_{{$item->id}}">
                                <option class="select-option" disabled value="">Duyệt</option>
                                <option class="select-option" value="6">Chấp nhận</option>
                                <option class="select-option" value="9">Xóa</option>
                            </select>
                        </td>
                        <td class="td-8">
                            <button class="btn btn-primary" onclick="access_posts({{$item->id}})">Duyệt</button>
                        </td>
                        <td class="td-9 hide">
                            {{$item}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">{{$list_feedback_admin->links()}}</div>
        </div>

    </div>
</section>
@include('include.dialog_show_feedback')
<script>
$("#select_feedback").change(function() {
    $.ajax({
        url: '/admin/getFeedback/' + $("#select_feedback").val()
    });
});

function access_posts(id) {
    $.ajax({
        type: "POST",
        url: '/admin/accessFeedback',
        data: {
            "_token": "{{ csrf_token() }}",
            id: id,
            status: $("#select_feedback_" + id + "").val()
        },
        success: function() {
            $("#select_feedback_" + id + "").parent().parent().addClass('hide');
        }
    });
}

$(".td-2").click(function() {
    var data = JSON.parse($(this).parent().find(".td-9").html());
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