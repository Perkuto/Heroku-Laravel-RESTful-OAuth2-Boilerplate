<?php

$environment = $app->detectEnvironment(function(){
    if (!getenv('APP_ENV')) {
        putenv('APP_ENV=development');
    }

    return getenv('APP_ENV');
});

Dotenv::load(__DIR__ . '/../config/environment/' . $environment);
Dotenv::setEnvironmentVariable('CONFIG_PATH', config_path() . '/environment/' . $environment);