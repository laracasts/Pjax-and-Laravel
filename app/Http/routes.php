<?php

get('/', function () {
    return view('welcome');
});

get('about', function () {
    return view('about');
});

get('contact', function () {
    return view('contact');
});


