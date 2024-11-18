function digitalRoot(n) {
    while (n >= 10) {
        n = n.toString().split('').reduce((sum, digit) => sum + +digit, 0);
    }
    return n;
}
