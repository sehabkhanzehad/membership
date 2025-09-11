<?php

namespace App\Enums;

enum Month: string
{
    case January = 'January';
    case February = 'February';
    case March = 'March';
    case April = 'April';
    case May = 'May';
    case June = 'June';
    case July = 'July';
    case August = 'August';
    case September = 'September';
    case October = 'October';
    case November = 'November';
    case December = 'December';
    case Other = 'Other';

    public static function values()
    {
        return array_column(static::cases(), 'value');
    }

    public static function only(array $months = [])
    {
        return array_filter(static::cases(), fn($case) => in_array($case->value, $months));
    }
}
