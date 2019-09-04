

<dialog class="dialog-cat-child" id="dialog_change_pw">
    
    <form method="dialog">
        <p>Thay đổi mật khẩu:</p>
        <div class="form-group">
            <label for="user_name">Mật khẩu cũ</label><label class="user-name-import"></label>
            <input type="text" class="form-control" id="user_name" placeholder="Mật khẩu cũ"
                name="user_name">
        </div>
        <div class="form-group">
            <label for="user_id">Mật khẩu mới</label>
            <input type="text" class="form-control" placeholder="Mật khẩu mới" name="user_id" readonly>
        </div>
        <div class="form-group">
            <label for="email">Nhập lại mật khẩu</label><label class="email-import"></label>
            <input type="text" class="form-control" id="email" placeholder="Nhập lại mật khẩu mới" name="email">
        </div>
        <menu>
            <button class="btn">Đóng</button>
            <button class="btn btn-success">Cập nhật</button>
        </menu>
    </form>
</dialog>