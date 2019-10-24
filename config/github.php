<?php

declare(strict_types=1);

/*
 * This file is part of Laravel GitHub.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'other',

    /*
    |--------------------------------------------------------------------------
    | GitHub Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like. Note that the 5 supported authentication methods are:
    | "application", "jwt", "none", "password", and "token".
    |
    */

    'connections' => [

        'main' => [
            'token'      => '29c0123720427aed6acad4fccb4839768af046dc',
            'method'     => 'token',
            // 'backoff'    => false,
            // 'cache'      => false,
            // 'version'    => 'v3',
            // 'enterprise' => false,
        ],

        'app' => [
            'clientId'     => 'be7832970b59d54c',
            'clientSecret' => 'a7c72f0e3677ec995c7ee52aadacc5cbd2c95947',
            'method'       => 'application',
            // 'backoff'      => false,
            // 'cache'        => false,
            // 'version'      => 'v3',
            // 'enterprise'   => false,
        ],

        'jwt' => [
            'token'        => 'your-jwt-token',
            'method'       => 'jwt',
            // 'backoff'      => false,
            // 'cache'        => false,
            // 'version'      => 'v3',
            // 'enterprise'   => false,
        ],

        'other' => [
            'username'   => 'chavewain',
            'password'   => 'DcF87911978',
            'method'     => 'password',
            // 'backoff'    => false,
            // 'cache'      => false,
            // 'version'    => 'v3',
            // 'enterprise' => false,
        ],

        'none' => [
            'method'     => 'none',
            // 'backoff'    => false,
            // 'cache'      => false,
            // 'version'    => 'v3',
            // 'enterprise' => false,
        ],

        'private' => [
            'appId'      => 'your-github-app-id',
            'keyPath'    => 'your-private-key-path',
            'method'     => 'private',
            // 'backoff'    => false,
            // 'cache'      => false,
            // 'version'    => 'v3',
            // 'enterprise' => false,
        ],

    ],

];
