@extends('master_admin')
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
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</section>
<!--Footer-->
@endsection