<?php

namespace App\Http\Helpers;

class StatusList{
    
    public static $repair_status_list =[
        'register' => "Зарегистрирован",
        'in_work' => 'В работе',
        'complayted' => 'Выполнен',
        'canceled' => 'Отменен',
    ];

    public static $filter_status_list = [
        'all' => 'Все',
        'register' => "Зарегистрированные",
        'in_work' => 'В работе',
        'complayted' => 'Выполненные',
        'canceled' => 'Отмененные',
        'not_complayted' => 'Не завершеные'
    ];
    public static $status_color = [
        'register' => "#999999",
        'in_work' => '#0099CC',
        'complayted' => '#22B573',
        'canceled' => '#CC0033',
    ];

}