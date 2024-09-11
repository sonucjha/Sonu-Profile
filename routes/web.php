<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-dashboard', function () {
    return view('dashboard.admin.index');
});

// ================= sidebar ===================

Route::get('/see-betu-photo', function () {
    return view('BETU_PHOTO.see_photo');
});
Route::get('/upload-betu-photo', function () {
    return view('BETU_PHOTO.upload_photo');
});
Route::get('/see-betu-video', function () {
    return view('BETU_VIDEO.see_video');
});
Route::get('/upload-betu-video', function () {
    return view('BETU_VIDEO.upload_video');
});
Route::get('/betu-cv', function () {
    return view('betu_cv');
});

Route::get('/see-cv', function () {
    return view('see_cv');
});
Route::get('/upload-cv', function () {
    return view('upload_cv');
});

Route::get('/see-family-photo', function () {
    return view('FAMILY_PHOTO.see_photo');
});
Route::get('/upload-family-video', function () {
    return view('FAMILY_PHOTO.upload_photo');
});
Route::get('/see-family-video', function () {
    return view('FAMILY_VIDEO.see_video');
});
Route::get('/upload-family-video', function () {
    return view('FAMILY_VIDEO.upload_video');
});