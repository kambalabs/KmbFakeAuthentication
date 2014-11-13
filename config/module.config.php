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
            'KmbFakeAuthentication\Listener\Fake' => 'KmbFakeAuthentication\Listener\Fake',
        ],
        'aliases' => [
            'kmbAuthAdapter' => 'KmbFakeAuthentication\Adapter\Fake',
            'kmbAuthListener' => 'KmbFakeAuthentication\Listener\Fake',
        ]
    ],
];
