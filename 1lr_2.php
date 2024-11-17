function enough($cap, $on, $wait) {
    $availableSpace = $cap - $on;
    return ($wait <= $availableSpace) ? 0 : $wait - $availableSpace;
}
