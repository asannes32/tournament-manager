<?php
declare(strict_types=1);

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Monolog settings
        'logger' => [
            'name' => 'auth-controller',
            'path' => isset($_ENV['local']) ? APP_ROOT . '/var/logs/app.log' : 'php://stdout',
            'level' => Monolog\Logger::DEBUG,
        ]
    ],
];
