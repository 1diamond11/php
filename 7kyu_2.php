function disemvowel(string $s): string {
    return preg_replace('/[aeiouAEIOU]/', '', $s);
}
