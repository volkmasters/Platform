<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Blacklisted IP  addresses
    |--------------------------------------------------------------------------
    |
    */
    'blacklist' => [
        // '127.0.0.1',
        // '192.168.17.0/24'
        // '127.0.0.1/255.255.255.255'
        // '10.0.0.1-10.0.0.255'
        // '172.17.*.*'
    ],

    /*
    |--------------------------------------------------------------------------
    | Whitelisted IP addresses,
    |--------------------------------------------------------------------------
    |
    */
    'whitelist' => [
        // '127.0.0.2',
        // '192.168.18.0/24'
        // '127.0.0.2/255.255.255.255'
        // '10.0.1.1-10.0.1.255'
        // '172.16.*.*'
    ],

    /*
    |--------------------------------------------------------------------------
    | File extensions that will be scanned
    |--------------------------------------------------------------------------
    |
    */
    'extensions' => [
        '.ph',
        '.php',
        '.php3',
        '.phtml',
        '.htm',
        '.htm',
        '.html',
        '.txt',
        '.js',
        '.pl',
        '.cgi',
        '.py',
        '.bash',
        '.sh',
        '.xml',
        '.ssi',
        '.inc',
        '.pm',
        '.tpl',
    ],

    /*
    |--------------------------------------------------------------------------
    | Typical signs of virus
    |--------------------------------------------------------------------------
    |
    */
    'signatures' => [
        'exec',
        'passthru',
        'system',
        'shell_exec',
        'popen',
        'proc_open',
        'pcntl_exec',
        'eval',
        'base64',
        'base64_decode',
        'assert',
        'preg_replace',
        'create_function',
        'include',
        'include_once',
        'require',
        'require_once',
        'ReflectionFunction',
    ],

];