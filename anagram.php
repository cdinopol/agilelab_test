<?php
function anagram($first_word, $second_word) {
    // lowercase words and remove non alphabet characters
    $first_word = str_split(strtolower(preg_replace('/[^a-zA-Z]/', '', $first_word)));
    $second_word = strtolower(preg_replace('/[^a-zA-Z]/', '', $second_word));

    // loop through chars of first word and find in second word
    foreach ($first_word as $char) {
        
        // check if second word is already empty
        // or if first word char is not in second word
        if (!$second_word || strpos($char, $second_word))
            return false;

        // remove the char in second word
        $second_word = preg_replace("/[$char]/", '', $second_word, 1);
    }
    
    // check if second word is still not empty
    if ($second_word)
        return false;

    return true;
}

# Usage 1
if (anagram('silent', 'LISTEN')) {
    echo "anagram";
} else {
    echo "not anagram";
}

echo "<br/>n";

# Usage 2
if (anagram('non anagram', 'of something else')) {
    echo "anagram";
} else {
    echo "not anagram";
}