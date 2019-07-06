@extends('master')
@section('content')
<link rel="stylesheet" href="../css/admin/acount.css">
<section class="wrapper page-admin-acount">
    <div class="media container_page">
        <div class="hidden-sm hidden-xs sidebar">
            <div class="wrapper-left">
                <div class="list-news">

                </div>
            </div>
        </div>
        <div class="media-body">
            <select class="form-control select-option-top">
                <option class="select-option" value="0">Người dùng </option>
                <option class="select-option" value="1">Admin</option>
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
                    <tr v-for="item in items" class="td-hover">
                        <td class="td-1">Công tằng tôn nữ nguyễn</td>
                        <td class="td-2">Nhantam</td>
                        <td class="td-3">bin_knight@gmail.com</td>
                        <td class="td-4">Nam</td>
                        <td class="td-5">số 2 thống nhất bình thọ thủ đứcTP.HCM</td>
                        <td class="td-6">01634538492</td>
                        <td class="td-7">mắt bão</td>
                        <td class="td-8">20/10/1992</td>
                        <td class="td-9">
                            <select class="form-control select-option" v-model="type">
                                <option class="select-option" disabled value="">Duyệt</option>
                                <option class="select-option" value="0">Người dùng</option>
                                <option class="select-option" value="1">Admin</option>
                                <option class="select-option" value="8">Khóa</option>
                                <option class="select-option" value="9">Xóa</option>
                            </select>
                        </td>
                        <td class="td-11">
                            <button class="btn btn-primary">Duyệt</button>
                        </td>
                    </tr>
                    <tr v-for="item in items" class="td-hover">
                        <td class="td-1">Nhẫn Tâm Bin</td>
                        <td class="td-2">Nhantam</td>
                        <td class="td-3">bin@gmail.com</td>
                        <td class="td-4">Nam</td>
                        <td class="td-5">TP.HCM</td>
                        <td class="td-6">01634538492</td>
                        <td class="td-7">mắt bão</td>
                        <td class="td-8">20/10/1992</td>
                        <td class="td-9">
                            <select class="form-control select-option" v-model="type">
                                <option class="select-option" disabled value="">Duyệt</option>
                                <option class="select-option" value="0">Người dùng</option>
                                <option class="select-option" value="1">Admin</option>
                                <option class="select-option" value="8">Khóa</option>
                                <option class="select-option" value="9">Xóa</option>
                            </select>
                        </td>
                        <td class="td-11">
                            <button class="btn btn-primary">Duyệt</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>
<!--Footer-->
@endsection