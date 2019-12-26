<?php

/**
 * Return URL of cdn
 *
 * @return void
 * @author toailq
 *
 *
 * @since 20190921
 */
function assetRemote($image_path)
{
    if (strpos($image_path, 'truyencotich') == true) { 
        $url = $image_path;
    } 
    else { 
        $url = DOMAIN_ROOT . '/' . $image_path;
    } 

    $useGetParameter = false;
    $extensions = ['.css', '.js'];
    foreach ($extensions as $extension) {
        if (strpos($url, $extension)) {
            $useGetParameter = true;
            break;
        }
    }

    return ($useGetParameter ? $url . '?time=9' : $url);
}

/**
 * Return URL of cdn
 *
 * @return void
 * @author toailq
 *
 *
 * @since 20190927
 */
function showStatusPosts($status)
{
    if ($status == 5) {
       return "Đã đăng";
    } else if ($status == 6) {
        return "Chờ duyệt";
    } else if ($status == 7) {
        return "Bài nháp";
    } else if ($status == 8) {
        return "Bị khóa";
    } else if ($status == 9) {
        return "Đã xóa";
    }  
}