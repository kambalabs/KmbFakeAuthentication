<?php
return [
    'service_manager' => [
        'invokables' => [
            'KmbFakeAuthentication\Adapter\Fake' => 'KmbFakeAuthentication\Adapter\Fake',
        ],
        'aliases' => [
            'KmbAuthentication\Adapter' => 'KmbFakeAuthentication\Adapter\Fake',
        ]
    ],
];
