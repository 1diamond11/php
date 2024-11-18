function expanded_form(int $n): string {
    $digits = str_split((string)$n); // Разбиваем число на массив цифр
    $length = count($digits); // Находим длину числа
    
    $result = [];
    
    foreach ($digits as $index => $digit) {
        if ($digit != '0') {
            $zeros = str_repeat('0', $length - $index - 1); // Добавляем нули в конце
            $result[] = $digit . $zeros; // Формируем строку для текущей цифры
        }
    }
    
    return implode(' + ', $result); // Соединяем элементы через " + "
}
