<style>
#dialog_select_image * {
  box-sizing: border-box;
}
#dialog_select_image .column {
  /* float: left;
  width: 33.33%; */
  /* padding: 5px; */
  margin: 5px;
}
#dialog_select_image .row::after {
  content: "";
  clear: both;
  display: table;
}

#dialog_select_image img{
    width:160px;
    height: 160px;
}

#dialog_select_image {
    border-radius: 5px;
    border: 1px;
    width: 61%;
    top: 10%;
    overflow-y: visible;
}
#dialog_select_image .title-select-library{
    margin:0px;
}

</style>

<dialog class="dialog-cat-child" id="dialog_select_image">
        <div><p class="title-select-library">Chọn ảnh trong thư viện của bạn</p>
        <input type="file" id="upload_image" name="image_upload" class="inputfile"
                                onchange="readURL(this);">
                            <label for="upload_image">Choose a file</label>
        </div>
        <hr>
        <p>Chọn ảnh có sẵn</p>
        <div class="row">
            <?php 
            $dirname = "public/image/";
            $images = glob($dirname."*.jpg");
            
            foreach($images as $image) {
                echo '<div class="column"><img onclick="selectImage(this);" class="image-select" src="'.$image.'" /></div>';
            }
            
            ?>
        </div>
        <menu>
            <span class="btn close-dialog" class="btn">Đóng</span>
            <span class="btn btn-success">Cập nhật</span>
        </menu>
</dialog>