<?php

const BASE_URL_ABSOLUTE = __DIR__;

if (!function_exists('url')) {
    function url($uri) {
        return $_ENV . $uri;
    }
}
