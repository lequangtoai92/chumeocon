@extends('master_admin')
@section('content')
<link rel="stylesheet" href="{!! assetRemote('css/admin/acount.css') !!}">z
<section class="wrapper page-admin-acount">
    <div class="media container_page">
    @include('admin.menu_left')
        <div class="media-body">
            <select class="form-control select-option-top" id="select_account_status">
                <option class="select-option" value="0">Người dùng </option>
                <option class="select-option" value="2">Admin 1</option>
                <option class="select-option" value="3">Admin 2</option>
                <option class="select-option" value="8">Tạm khóa</option>
                <option class="select-option" value="9">Xóa</option>
            </select>
            <table id="table_account" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="th-1">Họ tên</th>
                        <th class="th-2">Tên đăng nhập</th>
                        <th class="th-3">Email</th>
                        <th class="th-4">Giới tính</th>
                        <th class="th-5">Địa chỉ</th>
                        <th class="th-6">Số điện thoại</th>
                        <th class="th-7">Biệt danh</th>
                        <th class="th-8">Ngày đăng ký</th>
                        <th class="th-9">Duyệt</th>
                        <th class="th-11"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($account as $item)
                    <tr class="td-hover">
                        <td class="td-1" title="{{$item->full_name}}">{{$item->full_name}}</td>
                        <td class="td-2" title="{{$item->user_name}}">{{$item->user_name}}</td>
                        <td class="td-3" title="{{$item->email}}">{{$item->email}}</td>
                        <td class="td-4" title="{{$item->sex}}">{{$item->sex}}</td>
                        <td class="td-5" title="{{$item->address}}">{{$item->address}}</td>
                        <td class="td-6" title="{{$item->phone}}">{{$item->phone}}</td>
                        <td class="td-7" title="{{$item->nick_name}}">{{$item->nick_name}}</td>
                        <td class="td-8" title="{{$item->time_creat}}">{{$item->time_creat}}</td>
                        <td class="td-9">
                            <select class="form-control select-option" id="select_account_status_{{$item->id}}">
                                <option class="select-option" disabled value="">Duyệt</option>
                                <option class="select-option" value="0">Người dùng</option>
                                <option class="select-option" value="2">Admin 1</option>
                                <option class="select-option" value="3">Admin 2</option>
                                <option class="select-option" value="8">Khóa</option>
                                <option class="select-option" value="9">Xóa</option>
                            </select>
                        </td>
                        <td class="td-11">
                            <button class="btn btn-primary" onclick="access_posts({{$item->id}})">Duyệt</button>
                        </td>
                        <td class="td-12 hide">
                            {{$item}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">{{$account->links()}}</div>
        </div>

    </div>
</section>
@include('include.dialog_show_account')
<script>
$("#select_account_status").change(function() {
    $.ajax({
        url: '/admin/getAccountStatus/' + $("#select_account_status").val()
    });
});

function access_posts(id) {
    $.ajax({
        type: "POST",
        url: '/admin/accessAccountStatus',
        data: {
            "_token": "{{ csrf_token() }}",
            id: id,
            status: $("#select_account_status_" + id + "").val()
        },
        success: function() {
            $("#select_account_status_" + id + "").parent().parent().addClass('hide');
        }
    });
}

$(".td-2").click(function() {
    var data = JSON.parse($(this).parent().find(".td-12").html());
    $("#dialog_show_account .id").text(data.id);
    $("#dialog_show_account .user_name").text(data.user_name);
    $("#dialog_show_account .address").text(data.address);
    $("#dialog_show_account .authorities").text(data.authorities);
    $("#dialog_show_account .avatar").text(data.avatar);
    $("#dialog_show_account .birthday").text(data.birthday);
    $("#dialog_show_account .created_at").text(data.created_at);
    $("#dialog_show_account .email").text(data.email);
    $("#dialog_show_account .full_name").text(data.full_name);
    $("#dialog_show_account .nick_name").text(data.nick_name);
    $("#dialog_show_account .phone").text(data.phone);
    $("#dialog_show_account .sex").text(data.sex);
    $("#dialog_show_account .status").text(data.status);
    $("#dialog_show_account .time_creat").text(data.time_creat);
    $("#dialog_show_account .updated_at").text(data.updated_at);
    document.getElementById('dialog_show_account').showModal();
});

$(".close-dialog").click(function() {
    document.getElementById('dialog_show_account').close();
});

</script>
@endsection