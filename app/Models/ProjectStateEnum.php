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
    case recruitment = 1;
    case active = 2;
    case reRecruitment = 3;
    case arhive = 4;
    case participationProcessing = 5;
    case onReview = 6;
    case draft = 7;
    case rejected = 8;
    case approved = 9;
}
