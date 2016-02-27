<?php

Route::get('admin', function () {
    return View::make('badges::badges');
});