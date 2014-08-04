<?php
return [
    'router' => [
        'routes' => [
            'signout' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/signout',
                    'defaults' => [
                    ],
                ],
            ],
        ],
    ],
    'service_manager' => [
        'invokables' => [
            'KmbFakeAuthentication\Adapter\Fake' => 'KmbFakeAuthentication\Adapter\Fake',
        ],
        'aliases' => [
            'KmbAuthentication\Adapter' => 'KmbFakeAuthentication\Adapter\Fake',
        ]
    ],
];
