<?php
return [
    'backend' => [
        'frontName' => 'admin_7dem37w'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'wEXNJbDkYMBHzA4xXCdiwfx06gnI3XIS'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '119_'
            ],
            'page_cache' => [
                'id_prefix' => '119_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'config' => [
        'async' => 0
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'base64qjYhBQIxgCmhEd+0fwy6YKOW0TWfQ76D0fYcy+zGvaM='
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'empye',
                'username' => 'empye',
                'password' => '.5wd5p2j802@@##',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'production',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'graphql_query_resolver_result' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'www.empye.org'
    ],
    'install' => [
        'date' => 'Sun, 07 Jul 2024 16:10:48 +0000'
    ],
    'system' => [
        'default' => [
            'dev' => [
                'js' => [
                    'merge_files' => '1',
                    'enable_js_bundling' => '0',
                    'minify_files' => '1'
                ],
                'css' => [
                    'merge_css_files' => '1',
                    'minify_files' => '1'
                ]
	    ]
        ]
    ]
];
