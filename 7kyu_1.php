function multiples(int $m, float $n): array {
    $result = [];
    for ($i = 1; $i <= $m; $i++) {
        $result[] = $i * $n;
    }
    return $result;
}
