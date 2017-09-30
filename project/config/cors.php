<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */

    'supportsCredentials' => false,
    'allowedOrigins' => ['*'], // servidor de origem
    'allowedHeaders' => ['*'], // cabeçaçhos
    'allowedMethods' => ['*'], // verbos http, get, post...
    'exposedHeaders' => [],
    'maxAge' => 0,

];
