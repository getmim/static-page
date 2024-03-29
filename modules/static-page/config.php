<?php

return [
    '__name' => 'static-page',
    '__version' => '0.1.0',
    '__git' => 'git@github.com:getmim/static-page.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/static-page' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-formatter' => NULL
            ],
            [
                'lib-model' => NULL
            ],
            [
                'lib-user' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'StaticPage\\Model' => [
                'type' => 'file',
                'base' => 'modules/static-page/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'static-page-user' => [
                '@rest' => [
                    'type' => 'delete'
                ],
                'id' => [
                    'type' => 'number'
                ],
                'fullname' => [
                    'type' => 'text'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'static-page' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'static-page-user'
                ],
                'title' => [
                    'type' => 'text'
                ],
                'slug' => [
                    'type' => 'text'
                ],
                'content' => [
                    'type' => 'text'
                ],
                'meta' => [
                    'type' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];
