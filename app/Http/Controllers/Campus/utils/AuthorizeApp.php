<?php

namespace App\Http\Controllers\Campus\utils;

/**
 * Авторизовать приложение в кампусе
 * @return bool|array
 */
function AuthorizeApp(): false | array
{
    $APP = [
        'ID' => 'local.6149ff4c7fcf40.88217011',
        'CODE' => 'hpSC3PDk3TGpW1tWTqozH67k2JCD9n6ZY00Zp501baj8sNWvFW',
    ];
    //  формирование параметров запроса
    $url = implode('&', [
        'https://int.istu.edu/oauth/token/?grant_type=authorization_code',
        'code=' . $_REQUEST['code'],
        'client_id=' . $APP['ID'],
        'client_secret=' . $APP['CODE'],
    ]);
    //  выполнение запроса и обработка ответа

    $data = @file_get_contents($url);

    if (explode(' ', $http_response_header[0])[1] !== '200') {
        return false;
    }

    $campusData = json_decode($data, true);

    if (!isset($campusData['client_endpoint']) || !isset($campusData['access_token'])) {
        return false;
    }
    return $campusData;
}
