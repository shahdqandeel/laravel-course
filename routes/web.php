<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    $name ='Shahd Qandeel';

    $departments=[
        '1' => 'Tichnical',
        '2' => 'Financial',
        '3' => 'Sales'
    ];

    //return view('about') -> with('name',$name);
    //return view('about',['name',$name]);
    return view('about',compact('name','departments'));
});
Route::post('/about',function(){
    $name=$_POST['name'];
    $departments=[
        '1' => 'Tichnical',
        '2' => 'Financial',
        '3' => 'Sales'
    ];
    return view('about',compact('name','departments'));
});
