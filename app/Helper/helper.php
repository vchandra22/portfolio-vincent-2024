<?php

// get app name
function get_app_name()
{
    return env('APP_NAME');
}

// Menampilkan gambar
function getImageFile($file)
{
    if ($file != '') {
        return asset('storage/img/' . $file);
    } else {
        return asset('assets/img/logo-vincent-portfolio.png');
    }
}
