<?php

return array(
    'basePath' => realPath(__DIR__ . '/..'),
    'preload' => array('log'),
    'aliases' => array(
        'vendor' => 'application.vendor'
    ),
    'import' => array(
        'application.controllers.*',
        'application.extensions.components.*',
        'application.extensions.behaviors.*',
        'application.helpers.*',
        'application.models.*',
        'vendor.2amigos.yiistrap.helpers.*',
        'vendor.2amigos.yiiwheels.helpers.*',
    ),
    'components' => array(
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class'  => 'CLogRouter',
            'routes' => array(
                array(
                    'class'        => 'CFileLogRoute',
                    'levels'       => 'error, warning',
                ),
            ),
        ),
    ),
    'params' => array(

        // php configuration
        'php.defaultCharset' => 'utf-8',
        'php.timezone'       => 'UTC',
    )
);