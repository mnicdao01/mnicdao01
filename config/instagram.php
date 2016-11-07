<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Instagram Client Details
    |--------------------------------------------------------------------------
    |
    | When you run `artisan vendor:publish`, this config file will be copied
    | to `config/instagram.php`.
    |
    | Please register your application as an Instagram Client here:
    | https://www.instagram.com/developer/
    |
    | When registering your client, be sure to provide all valid redirect
    | URIs that you will use in testing, staging, and production.
    |
    | After registering, either update the values directly in
    | `config/instagram.php` or add them as the following environment
    | variables to your local `.env` file.
    |
    | * INSTAGRAM_CLIENT_ID
    | * INSTAGRAM_CLIENT_SECRET
    | * INSTAGRAM_REDIRECT_URI
    |
    */

    'clientId' => env('b15afca035a94a679e26a41d62b6e01d'),
    'clientSecret' => env('2a2e5c1a56d54289810caa4d6cb8467f '),
    'redirectUri' => env('marknicdao.info/insta'),

];
