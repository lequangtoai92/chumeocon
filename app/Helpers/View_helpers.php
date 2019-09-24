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
    $url = DOMAIN_ROOT . '/' . $image_path;

    $useGetParameter = false;
    $extensions = ['.css', '.js'];
    foreach ($extensions as $extension) {
        if (strpos($url, $extension)) {
            $useGetParameter = true;
            break;
        }
    }

    return ($useGetParameter ? $url . '?time=' : $url);
}