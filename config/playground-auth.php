<?php

return [
    'redirect' => env('PLAYGROUND_AUTH_REDIRECT', null),
    // 'session' => false,
    'token' => [
        // 'abilities' => '',
        // 'abilities' => 'user',
        'abilities' => 'merge',
        'expires' => 'tomorrow midnight',
        // 'expires' => null,
        'name' => 'app',
        // @see playground.auth.token.name
        'listed' => true,
        'roles' => true,
        'privileges' => false,
        'sanctum' => true,
    ],
    'load' => [
        'commands' => (bool) env('PLAYGROUND_AUTH_LOAD_COMMANDS', true),
        'translations' => (bool) env('PLAYGROUND_AUTH_LOAD_TRANSLATIONS', true),
    ],
    /**
     * Provide an array of email addresses for admin privileges.
     */
    'admins' => [
        // 'cindy@example.com',
        // 'joe@example.com',
        // 'tim@example.com',
    ],
    /**
     * Provide an array of email addresses for manager privileges.
     */
    'managers' => [
        // 'sally@example.com',
    ],
    'abilities' => [
        'root' => [
            '*',
        ],
        'admin' => [
            'app:*',
            'playground:*',
            'playground-auth:*',
            'playground-matrix:*',
            'playground-matrix-resource:*',
        ],
        'manager' => [
            'app:view',

            'playground:view',

            'playground-auth:logout',
            'playground-auth:reset-password',

            'playground-matrix:view',
            'playground-matrix-resource:view',

            'playground-matrix-resource:backlog:*',
            'playground-matrix-resource:board:*',
            'playground-matrix-resource:epic:*',
            'playground-matrix-resource:flow:*',
            'playground-matrix-resource:milestone:*',
            'playground-matrix-resource:note:*',
            'playground-matrix-resource:project:*',
            'playground-matrix-resource:release:*',
            'playground-matrix-resource:roadmap:*',
            'playground-matrix-resource:source:*',
            'playground-matrix-resource:sprint:*',
            'playground-matrix-resource:tag:*',
            'playground-matrix-resource:team:*',
            'playground-matrix-resource:ticket:*',
            'playground-matrix-resource:version:*',
        ],
        'user' => [
            'app:view',

            'playground:view',

            'playground-auth:logout',
            'playground-auth:reset-password',

            'playground-matrix:view',
            'playground-matrix-resource:view',

            'playground-matrix-resource:backlog:view',
            'playground-matrix-resource:backlog:viewAny',
            'playground-matrix-resource:board:view',
            'playground-matrix-resource:board:viewAny',
            'playground-matrix-resource:epic:view',
            'playground-matrix-resource:epic:viewAny',
            'playground-matrix-resource:flow:view',
            'playground-matrix-resource:flow:viewAny',
            'playground-matrix-resource:milestone:view',
            'playground-matrix-resource:milestone:viewAny',
            'playground-matrix-resource:note:view',
            'playground-matrix-resource:note:viewAny',
            'playground-matrix-resource:project:view',
            'playground-matrix-resource:project:viewAny',
            'playground-matrix-resource:release:view',
            'playground-matrix-resource:release:viewAny',
            'playground-matrix-resource:roadmap:view',
            'playground-matrix-resource:roadmap:viewAny',
            'playground-matrix-resource:source:view',
            'playground-matrix-resource:source:viewAny',
            'playground-matrix-resource:sprint:view',
            'playground-matrix-resource:sprint:viewAny',
            'playground-matrix-resource:tag:view',
            'playground-matrix-resource:tag:viewAny',
            'playground-matrix-resource:team:view',
            'playground-matrix-resource:team:viewAny',
            'playground-matrix-resource:ticket:view',
            'playground-matrix-resource:ticket:viewAny',
            'playground-matrix-resource:ticket:create',
            'playground-matrix-resource:ticket:edit',
            'playground-matrix-resource:ticket:store',
            'playground-matrix-resource:ticket:update',
            'playground-matrix-resource:version:view',
            'playground-matrix-resource:version:viewAny',
        ],
        'guest' => [
            'none',
        ],
        // 'guest' => [
        //     'app:view',

        //     'playground:view',

        //     'playground-auth:logout',
        //     'playground-auth:reset-password',

        //     'playground-matrix-resource:backlog:view',
        //     'playground-matrix-resource:backlog:viewAny',
        //     'playground-matrix-resource:board:view',
        //     'playground-matrix-resource:board:viewAny',
        //     'playground-matrix-resource:epic:view',
        //     'playground-matrix-resource:epic:viewAny',
        //     'playground-matrix-resource:flow:view',
        //     'playground-matrix-resource:flow:viewAny',
        //     'playground-matrix-resource:milestone:view',
        //     'playground-matrix-resource:milestone:viewAny',
        //     'playground-matrix-resource:note:view',
        //     'playground-matrix-resource:note:viewAny',
        //     'playground-matrix-resource:project:view',
        //     'playground-matrix-resource:project:viewAny',
        //     'playground-matrix-resource:release:view',
        //     'playground-matrix-resource:release:viewAny',
        //     'playground-matrix-resource:roadmap:view',
        //     'playground-matrix-resource:roadmap:viewAny',
        //     'playground-matrix-resource:source:view',
        //     'playground-matrix-resource:source:viewAny',
        //     'playground-matrix-resource:sprint:view',
        //     'playground-matrix-resource:sprint:viewAny',
        //     'playground-matrix-resource:tag:view',
        //     'playground-matrix-resource:tag:viewAny',
        //     'playground-matrix-resource:team:view',
        //     'playground-matrix-resource:team:viewAny',
        //     'playground-matrix-resource:ticket:view',
        //     'playground-matrix-resource:ticket:viewAny',
        //     'playground-matrix-resource:version:view',
        //     'playground-matrix-resource:version:viewAny',
        // ],
    ],
];
