<?php

return [
    /*
     * Set the JSON Web Key retrieved from VATUSA's Facility Management
     */
    //'jwk' => json_decode(env('API_JWK', []), true),

    /*
     * Facility 3 letter identifier
     */
    'facility' => env('FACILITY', 'ZZZ')
];