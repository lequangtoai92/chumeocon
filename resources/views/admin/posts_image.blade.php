@extends('master_admin')
@section('content')
<link rel="stylesheet" href="{!! assetRemote('css/admin/acount.css') !!}">
<section class="wrapper page-admin-post-image">
    <div class="media container_page">
        @include('admin.menu_left')
        <div class="media-body">
            <div class="show-image">
                <div>
                    <p class="title-select-library">Chọn ảnh trong thư viện của bạn</p>
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
                echo '<div class="column"><img class="image-select" src="'.assetRemote($image).'" /></div>';
            }
            
            ?>
                </div>
            </div>
        </div>

    </div>
</section>
<!--Footer-->
@endsection