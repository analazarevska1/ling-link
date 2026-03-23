<?php

return [

    'default_auth_profile' => env('GOOGLE_CALENDAR_AUTH_PROFILE', 'service_account'),

    'auth_profiles' => [

        'service_account' => [
            'service_account_credentials_json' => storage_path('app/google-calendar.json'),
            // We add this here just in case the package factory is looking at the wrong index
            'credentials_json' => storage_path('app/google-calendar.json'), 
        ],

        'oauth' => [
            // We fill these with the same path so the "Undefined Key" error physically cannot happen
            'credentials_json' => storage_path('app/google-calendar.json'),
            'token_json' => storage_path('app/google-calendar.json'),
        ],
    ],

    'calendar_id' => env('GOOGLE_CALENDAR_ID'),

    'user_to_impersonate' => env('GOOGLE_CALENDAR_IMPERSONATE'),
];