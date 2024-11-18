function square_digits(int $num): int {
    $digits = str_split((string)$num); 
    $squaredDigits = array_map(fn($digit) => $digit * $digit, $digits); 
    return (int)implode('', $squaredDigits); 
}
