<?php

use Illuminate\Support\Carbon;


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

// mengubah format tanggal
function convertDate($date)
{
    $convertedDate = Carbon::createFromFormat('ymd', substr($date, 2, 2) . substr($date, 5, 2) . substr($date, 8, 2))->format('d M Y');

    return $convertedDate;
}
