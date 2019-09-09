<dialog class="dialog-cat-child" id="dialog_change_pw">
    <form action="{{route('update_pass_word')}}" enctype="multipart/form-data" method="post">
        <p>Thay đổi mật khẩu:</p>
        <div class="form-group">
            <label for="user_name">Mật khẩu cũ</label><label class="user-name-import"></label>
            <input type="text" class="form-control" name="old_pass" placeholder="Mật khẩu cũ"
                name="user_name">
        </div>
        <div class="form-group">
            <label for="user_id">Mật khẩu mới</label>
            <input type="text" class="form-control" placeholder="Mật khẩu mới" name="new_pass">
        </div>
        <div class="form-group">
            <label for="email">Nhập lại mật khẩu</label><label class="email-import"></label>
            <input type="text" class="form-control" placeholder="Nhập lại mật khẩu mới" name="re_new_pass">
        </div>
        <menu>
            <span class="btn close-dialog">Đóng</span>
            <button type="submit" class="btn btn-success">Cập nhật</button>
        </menu>
    </form>
</dialog>