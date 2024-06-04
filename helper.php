<?php
const PATH_ASSET = __DIR__ . '/assets/';

function show_upload($path)
{
    return $_ENV['BASE_URL'] . 'assets/' . $path;
}


const BASE_URL_ABSOLUTE = __DIR__;

if (!function_exists('url')) {
    function url($uri) {
        return $_ENV . $uri;
    }
}
