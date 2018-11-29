<?php
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->get('22',function ($api){
        return 11;
    });
});