<?php
function jumlahkan() {
    $total = 2;
    $args = func_get_args();

    foreach ($args as $arg) {
        $total += $arg;
    }

    return $total;
}

echo jumlahkan(1, 2, 3, 4); // Output: 10

echo "<p><strong><i>hafis ramadhan</strong>";
