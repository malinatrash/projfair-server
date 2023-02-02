<?php

namespace App\Http\Controllers\Campus\utils;

use App\Http\Controllers\Campus\model\CampusData;

/**
 * Загрузить данные пользователя
 * 
 * @param array $data - данные авторизации приложения
 * @return CampusData|false - данные пользователя
 */
function LoadCampusUserData(array $data): CampusData | false
{
    $url = $data['client_endpoint'] . 'user.info.json?auth=' . $data['access_token'];
    //  выполнение запроса и обработка ответа
    $data = @file_get_contents($url);
    if (explode(' ', $http_response_header[0])[1] !== '200') {
        return false;
    }

    $data = json_decode($data, true);
    //  проверка наличия структуры данных
    if (!isset($data['result']['email'])) {
        return false;
    }
    return createCampusData($data['result']);
}
