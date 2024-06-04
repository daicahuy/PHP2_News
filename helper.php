<?php
const PATH_ASSET = __DIR__ . '/assets/';

function show_upload($path)
{
    return $_ENV['BASE_URL'] . 'assets/' . $path;
}
