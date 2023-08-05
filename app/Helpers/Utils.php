<?php

namespace App\Helpers;

use DateTime;

class Utils
{
    public static function replace($input, $replacement = '')
    {
        if (isset($input)) {
            return $input;
        }
        return $replacement;
    }
    public static function replaceValue(array $obj, string $key, $replacement = '')
    {
        if (!array_key_exists($key, $obj)) {
            return $replacement;
        }

        return self::replace($obj[$key], $replacement);
    }

    public static function toIndonesianDate($dateString)
    {
        $months = [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        ];
    
        $date = DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $dateString);
    
        if ($date === false) {
            return 'Invalid Date';
        }
    
        $day = $date->format('d');
        $month = $date->format('m');
        $year = $date->format('Y');
    
        return $day . ' ' . $months[$month] . ' ' . $year;
    }
    
}
