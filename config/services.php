<?php
return [
  'twitter' => [
        'client_id'     => env('TWITTER_ID'),
        'client_secret' => env('TWITTER_SECRET'),
        'redirect'      => env('TWITTER_URL'),
    ],
    
  'facebook' => [
    'client_id' => 'xxxxxxx',
    'client_secret' => 'xxxxxxx',
    'redirect' => 'http://localhost:8000/callback',
  ],


];
