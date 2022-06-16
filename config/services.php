<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'stripe' => [
        'model'  => App\Models\User::class,
        'key' => env('pk_test_51KqC8eCFqPz698tdHw4AMWeNUwVPhxLFaWnprr72FzUR2J9Mfx6cAotQoSCvGCIB7vfn8TXhwb7jjq5jUBnFYPh600PWijDwwG'),
        'secret' => env('sk_test_51KqC8eCFqPz698tdsv0ErmAlsyjRxL2ejOhuhBQ2VEKZ3OH2ROUcSioh0UsXfuzGtDc8KPRx9WVXGgp8ckvpnq0b00HXakqeLq'),
    ],

];
