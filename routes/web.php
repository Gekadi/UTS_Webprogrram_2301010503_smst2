<?php

return [
    ["GET /", "home@index"],

    ["GET /profile", "profile@index"],
    ["GET /profile/tambah", "profile@tambah"],
    ["POST /profile/create", "profile@create"],
    ["GET /profile/ubah", "profile@ubah"],
    ["POST /profile/update", "profile@update"],
    ["POST /profile/delete", "profile@delete"],

    ["GET /pendidikan", "pendidikan@index"],
    ["GET /pendidikan/create", "pendidikan@create"],
    ["POST /pendidikan", "pendidikan@store"],
    ["GET /pendidikan/show", "pendidikan@show"],
    ["GET /pendidikan/edit", "pendidikan@edit"],
    ["POST /pendidikan/update", "pendidikan@update"],
    ["POST /pendidikan/destroy", "pendidikan@destroy"],
];
