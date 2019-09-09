

<dialog class="dialog-cat-child" id="dialog_forgot_password">
    <form action="{{route('forgot_pass_word')}}" enctype="multipart/form-data" method="post">
        <p>Chúng tôi sẽ  gửi mật khẩu mới về mail của bạn</p>
        <div class="form-group">
            <label for="user_name">Tên đăng nhập</label><label class="user-name-import"></label>
            <input type="text" class="form-control" placeholder="Tên đăng nhập"
                name="user_name">
        </div>
        <div class="form-group">
            <label for="user_id">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
        <menu>
            <span class="btn close-dialog">Đóng</span>
            <button class="btn btn-success">Cập nhật</button>
        </menu>
    </form>
</dialog>