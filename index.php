<?php

function is_even($n) {
    return $n % 2 == 0;
}

function count_promotion_days($year) {
    $stool_days = 0;
    $chair_days = 0;


    for ($i = 2000; $i <= $year; $i++) {

        for ($m = 1; $m <= 12; $m++) {
            $days_in_month = cal_days_in_month(CAL_GREGORIAN, $m, $i);
            for ($d = 1; $d <= $days_in_month; $d++) {
                if (is_even($d)) {
                    $stool_days++;
                    echo date("j F Y", mktime(0, 0, 0, $m, $d, $i )).' ';
                } else {
                    $chair_days++;
                }
            }
        }
    }

    if ($stool_days > $chair_days) {
        echo "Акции на столы будут идти в начале следующего года.\n";
    } else {
        echo "Акции на стулья будут идти в начале следующего года.";
    }
}

$count_year = 2024;
count_promotion_days($count_year);

?>