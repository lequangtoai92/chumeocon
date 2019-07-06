@extends('master')
@section('content')
<link rel="stylesheet" href="../css/admin/posts.css">
<section class="wrapper page-admin-posts">
    <div class="media container_page">
        <div class="hidden-sm hidden-xs sidebar">
            <div class="wrapper-left">
                <div class="list-news">

                </div>
            </div>
        </div>
        <div class="media-body">
            <select class="form-control select-option-top">
                <option class="select-option" value="0">Chưa Duyệt </option>
                <option class="select-option" value="1">Đã duyệt</option>
                <option class="select-option" value="2">Xóa</option>
            </select>
            <table id="table_posts" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="th-1">Tên truyện</th>
                        <th class="th-2">Nội dung</th>
                        <th class="th-5">Tác giả</th>
                        <th class="th-6">Ngày viết</th>
                        <th class="th-7">Đánh giá</th>
                        <th class="th-8">Duyệt</th>
                        <th class="th-9">Lý do</th>
                        <th class="th-10"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in items" class="td-hover ">
                        <td class="td-1">Chú mèo con</td>
                        <td class="td-2">Ngày xưa có một chú mèo con rất ham chơi</td>
                        <td class="td-5">mắt bão</td>
                        <td class="td-6">20/10/1992</td>
                        <td class="td-7">70/100</td>
                        <td class="td-8">
                            <select class="form-control select-option">
                                <option class="select-option" disabled value="">Duyệt</option>
                                <option class="select-option" value="1">Chấp nhận</option>
                                <option class="select-option" value="2">Xóa</option>
                            </select>
                        </td>
                        <td class="td-9">
                            <input class="form-control">
                        </td>
                        <td class="td-9">
                            <button class="btn btn-primary">Duyệt</button>
                        </td>
										</tr>
										<tr v-for="item in items" class="td-hover ">
                        <td class="td-1">Chú mèo con ham ăn</td>
                        <td class="td-2">Ngày xưa có một chú mèo con rất ham chơi</td>
                        <td class="td-5">mắt bão</td>
                        <td class="td-6">20/10/1992</td>
                        <td class="td-7">70/100</td>
                        <td class="td-8">
                            <select class="form-control select-option">
                                <option class="select-option" disabled value="">Duyệt</option>
                                <option class="select-option" value="1">Chấp nhận</option>
                                <option class="select-option" value="2">Xóa</option>
                            </select>
                        </td>
                        <td class="td-9">
                            <input class="form-control">
                        </td>
                        <td class="td-9">
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