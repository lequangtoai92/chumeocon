<dialog class="dialog-cat-child" id="dialog_intro">
  <form  action="{{route('update_intro')}}" enctype="multipart/form-data" method="post">
    <p>Giới thiệu bản thân:</p>
    <textarea id="content_main" rows="15" name="content_intro" class="form-control"
                    placeholder="Nội dung(*)">{{$intro->content}}</textarea>
                    
    
    <menu>
      <button class="btn">Đóng</button>
      <button class="btn btn-success">Cập nhật</button>
    </menu>
  </form>
</dialog>