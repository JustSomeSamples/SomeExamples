<?php

function summarizeDuplicates(string $text): void {
    if ($text === '') {
        return;
    }

    $chars = str_split($text);

    $charCounts = [];

    // Count occurrences of each character
    foreach ($chars as $char) {
        if (!isset($charCounts[$char])) {
            $charCounts[$char] = [
                'char' => $char,
                'cnt' => 1
            ];
        } else {
            $charCounts[$char]['cnt']++;
        }
    }

    // Sort characters by count descending and alphabetically backwards
    usort($charCounts, function ($a, $b) {
        if($a['cnt'] == $b['cnt']){
            return strcmp($b['char'], $a['char']);
        }
        return $a['cnt'] < $b['cnt'] ? 1 : -1;
    });

    // Output summary
    foreach ($charCounts as $charCount) {
        echo "- {$charCount['char']} = {$charCount['cnt']}\n";
    }
}

// Example usage:
$text = "aabccddaeee";
summarizeDuplicates($text);
