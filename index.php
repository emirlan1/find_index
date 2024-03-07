<?php
function findIndex($wordsString, $delimiterString) {

    $words = explode(' ', $wordsString);
    $delimiters = explode(' | ', $delimiterString);

    foreach ($words as $word) {
        foreach ($delimiters as $index => $delimiter) {
            $delimiterWords = explode(', ', $delimiter);
            if (in_array($word, $delimiterWords)) {
                return $index + 1; 
            }
        }
    }

    return -1; 
}

if ($argc === 3) {
    $wordsString = $argv[1];
    $delimiterString = $argv[2];

    $index = findIndex($wordsString, $delimiterString);

    if ($index !== -1) {
        echo "Совпадение найдено в индексе $index\n";
    } else {
        echo "Совпадение не найдено\n";
    }
} else {
    echo "Неправильно переданы аргументы";
}
?>