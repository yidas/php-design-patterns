<?php

/**
 * @param int $start
 * @param int $end
 * @param callable $callback(int $handlingNumber, int $sum)
 */
function counter($start, $end, callable $callback=null) {

    $count = 0;
    for ($i=$start; $i <= $end; $i++) { 
        $count += $i;
        if ($callback) {
            $callback($i, $count);
        }
    }
    return $count;
}

$count = counter(1, 10, function($number, $count) {
    echo "The handling number is {$number} and the sum is {$count}\n";
});
