<?php

namespace App\Http\Controllers\Campus\utils;

use App\Http\Controllers\Campus\model\CampusUserData;
use Exception;

/**
 * Загрузить данные пользователя
 * 
 * @param string $clientEndpoint
 * @param string $accessToken
 * @throws Exception - не удалось загрузить данные
 * @return CampusUserData - данные пользователя
 */
function LoadCampusUserData(string $clientEndpoint, string $accessToken): CampusUserData
{
    $urlToGetUserData = $clientEndpoint . 'user.info.json?auth=' . $accessToken;
    //  выполнение запроса и обработка ответа
    $data = @file_get_contents($urlToGetUserData);
    if (explode(' ', $http_response_header[0])[1] !== '200') {
        throw new Exception();
    }

    $data = json_decode($data, true);
    //  проверка наличия структуры данных
    if (!isset($data['result']['email'])) {
        throw new Exception();
    }
    return createCampusUserData($data['result']);
}
