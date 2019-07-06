@extends('master')
@section('content')
<link rel="stylesheet" href="../css/admin/feedback.css">
<section class="wrapper page-admin-feedback">
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
                    <tr v-for="item in items" class="td-hover ">
                        <td class="td-1">Nhẫn tâm bin</td>
                        <td class="td-2">Trang web quá xấu</td>
                        <td class="td-3">window 1o</td>
                        <td class="td-4">Chrome</td>
                        <td class="td-5">75</td>
                        <td class="td-6">20/10/1992</td>
                        <td class="td-7">
                            <select class="form-control select-option">
                                <option class="select-option" disabled value="">Duyệt</option>
                                <option class="select-option" value="1">Chấp nhận</option>
                                <option class="select-option" value="2">Xóa</option>
                            </select>
                        </td>
                        <td class="td-11">
												<button class="btn btn-primary">Duyệt</button>
                        </td>
										</tr>
										<tr v-for="item in items" class="td-hover ">
                        <td class="td-1">Nhẫn tâm bin</td>
                        <td class="td-2">Tính năng đăng bài không hoạt động</td>
                        <td class="td-3">samsung galaxy a8 start</td>
                        <td class="td-4">Chrome</td>
                        <td class="td-5">75</td>
                        <td class="td-6">20/10/1992</td>
                        <td class="td-7">
                            <select class="form-control select-option">
                                <option class="select-option" disabled value="">Duyệt</option>
                                <option class="select-option" value="1">Chấp nhận</option>
                                <option class="select-option" value="2">Xóa</option>
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
@endsection