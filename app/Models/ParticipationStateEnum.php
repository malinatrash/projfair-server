<?php

namespace App\Models;

/**
 * Состояние заявки
 * 1 - На распределении
 * 2 - Участвует
 * 3 - Архив
 * 4 - Отклонена
 */
enum ParticipationStateEnum: int
{
    case ditribution = 1;
    case active = 2;
    case arhive = 3;
    case rejected = 4;

    /** Получить все данные состояний */
    public static function getAllParticipationStatesData(): array
    {
        $statesData = [];
        foreach (static::cases() as $stateEnum) {
            array_push(
                $statesData,
                static::getProjectStateFromEnum($stateEnum)
            );
        }
        return $statesData;
    }


    /** Получить состояния, которые показываются в кабинете директора */
    public static function getProjectStateFromEnum(ParticipationStateEnum $participationStateEnum): ParticipationState
    {
        $stateData = [];
        switch ($participationStateEnum->name) {
            case static::ditribution->name:
                $stateData = [
                    'name' => 'На распределении',
                ];
                break;
            case static::active->name:
                $stateData = [
                    'name' => 'Участвует',
                    'show_priority' => '1',
                ];
                break;
            case static::arhive->name:
                $stateData = [
                    'name' => 'Архив',
                    'show_priority' => '1',
                ];
                break;
            case static::rejected->name:
                $stateData = [
                    'name' => 'Отклонена',
                    'show_priority' => '1',
                ];
                break;
        }

        return  new ParticipationState(id: $participationStateEnum->value, state: $stateData['name']);
    }
}
