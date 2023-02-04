<?php

namespace App\Http\Controllers\Campus\utils;

use Exception;

/**
 * Авторизовать приложение в кампусе 
 * @throws Exception - не удалось авторизовать приложение
 * @return array
 */
function AuthorizeApp(string $authorizationCode): array
{
    $APP = [
        'ID' => 'local.6149ff4c7fcf40.88217011',
        'CODE' => 'hpSC3PDk3TGpW1tWTqozH67k2JCD9n6ZY00Zp501baj8sNWvFW',
    ];
    //  формирование параметров запроса
    $url = implode('&', [
        'https://int.istu.edu/oauth/token/?grant_type=authorization_code',
        'code=' . $authorizationCode,
        'client_id=' . $APP['ID'],
        'client_secret=' . $APP['CODE'],
    ]);
    //  выполнение запроса и обработка ответа

    $data = @file_get_contents($url);

    if (explode(' ', $http_response_header[0])[1] !== '200') {
        throw new Exception();
    }

    $campusData = json_decode($data, true);

    if (!isset($campusData['client_endpoint']) || !isset($campusData['access_token'])) {
        throw new Exception();
    }
    return $campusData;
}
