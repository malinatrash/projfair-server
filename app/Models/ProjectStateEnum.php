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
        return  [static::onReview->value, static::rejected->value];
    }
}
