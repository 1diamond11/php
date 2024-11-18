function square_sum($numbers) {
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += $num * $num;
    }
    return $sum;
}
