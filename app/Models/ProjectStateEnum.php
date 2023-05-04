<?php

namespace App\Models;


/**
 * Состояние проекта
 * 1 - Идёт набор
 * 2 - Активный
 * 3 - Добор
 * 4 - В архиве
 * 5 - Обработка заявок
 * 6 - На рассмотрении
 * 7 - Черновик
 * 8 - Отклонено
 * 9 - Одобрено
 */
enum ProjectStateEnum: int
{
    /**  Идёт набор */
    case recruitment = 1;

    /** 2 - Активный */
    case active = 2;

    /** 3 - Добор */
    case reRecruitment = 3;

    /** 4 - В архиве */
    case arhive = 4;

    /** 5 - Обработка заявок */
    case participationProcessing = 5;

    /** 6 - На рассмотрении */
    case onReview = 6;

    /** 7 - Черновик */
    case draft = 7;

    /** 8 - Отклонено */
    case rejected = 8;

    /** 9 - Одобрено */
    case approved = 9;

    /** Получить состояния, которые показываются всем */
    public static function getPublicStatesIds(): array
    {
        return  [
            static::recruitment->value,
            static::active->value,
            static::reRecruitment->value,
            static::arhive->value,
            static::participationProcessing->value
        ];
    }

    /** Получить состояния, которые показываются в кабинете директора */
    public static function getDirectorCabinetStatesIds(): array
    {
        return  [static::onReview->value, static::rejected->value, static::approved->value];
    }

    /** Получить все данные состояний */
    public static function getAllProjectStatesData(): array
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
    public static function getProjectStateFromEnum(ProjectStateEnum $projectStateEnum): ProjectState
    {
        $stateData = [];
        switch ($projectStateEnum->name) {
            case static::recruitment->name:
                $stateData = [
                    'name' => 'Идёт набор',
                    'show_priority' => '5',
                ];
                break;
            case static::active->name:
                $stateData = [
                    'name' => 'Активный',
                    'show_priority' => '5',
                ];
                break;
            case static::reRecruitment->name:
                $stateData = [
                    'name' => 'Добор',
                    'show_priority' => '5',
                ];
                break;
            case static::arhive->name:
                $stateData = [
                    'name' => 'В архиве',
                    'show_priority' => '1',
                ];
                break;
            case static::participationProcessing->name:
                $stateData = [
                    'name' => 'Обработка заявок',
                    'show_priority' => '5',
                ];
                break;
            case static::onReview->name:
                $stateData = [
                    'name' => 'На рассмотрении',
                    'show_priority' => '5',
                ];
                break;
            case static::draft->name:
                $stateData = [
                    'name' => 'Черновик',
                    'show_priority' => '5',
                ];
                break;
            case static::rejected->name:
                $stateData = [
                    'name' => 'Отклонено',
                    'show_priority' => '5',
                ];
                break;
            case static::approved->name:
                $stateData = [
                    'name' => 'Одобрено',
                    'show_priority' => '5',
                ];
                break;
        }

        return  new ProjectState(id: $projectStateEnum->value, state: $stateData['name'], showPriority: $stateData['show_priority']);
    }
}
