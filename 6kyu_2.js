function expandedForm(num) {
    let [integerPart, decimalPart] = num.toString().split('.'); // Разделяем целую и дробную части
    let expandedInteger = integerPart
        .split('')
        .map((digit, index, arr) => digit !== '0' ? digit + '0'.repeat(arr.length - index - 1) : null)
        .filter(Boolean)
        .join(' + '); // Разворачиваем целую часть

    if (!decimalPart) return expandedInteger; // Если нет дробной части, возвращаем только целую часть

    let expandedDecimal = decimalPart
        .split('')
        .map((digit, index) => digit !== '0' ? `${digit}/${Math.pow(10, index + 1)}` : null)
        .filter(Boolean)
        .join(' + '); // Разворачиваем дробную часть

    return expandedInteger && expandedDecimal ? expandedInteger + ' + ' + expandedDecimal : expandedDecimal;
}
