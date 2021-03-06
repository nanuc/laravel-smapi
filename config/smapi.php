<?php

return [
    'vendor-id' => env('SMAPI_VENDOR_ID'),
    'refresh-token' => env('SMAPI_REFRESH_TOKEN'),
    'amazon-client-id' => env('SMAPI_AMAZON_CLIENT_ID', config('services.amazon.client_id')),
    'amazon-client-secret' => env('SMAPI_AMAZON_CLIENT_SECRET', config('services.amazon.client_secret')),
    'logging' => [
        'requests' => [
            'database' => env('SMAPI_LOGGING_REQUESTS_DATABSE', true)
        ],
        'errors' => [
            'channel' => env('SMAPI_LOGGING_ERRORS_CHANNEL')
        ]
    ]
];
