<?php

use App\Http\Middleware\IsAdmin;

return [
  'web' => [
    // jika kamu ingin middleware ini otomatis aktif di grup web, masukkan di sini
  ],

  'api' => [
    // sama juga jika untuk grup API
  ],

  'middleware' => [
    'isadmin' => IsAdmin::class,
  ],
];