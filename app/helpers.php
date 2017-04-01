<?php

function flash($title = null, $message = null, $notice = null) {
    $flash = app('App\Http\Flash');

    return $flash->message($title, $message, $notice);
}