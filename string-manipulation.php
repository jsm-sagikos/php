<?php

/* Useful functions and tips around string manipulation in PHP. */


/**
 * chr()
 * 
 * Returns a string for an ascii number, e.g. 49 = "1".
 */
    echo "[1] chr(101)=" . chr(101) . "\n";

    /**
     * Build an UTF-8 string from individual bytes by concatenating chrs:
     */
    $str = chr(240) . chr(159) . chr(144) . chr(152);
    echo "[2] chr(240).chr(159).chr(144).chr(152)=" . $str . "\n";


/**
 * ord()
 * 
 * Returns the ascii number for a string, e.g. "1" = 49.
 */
    echo "[3 ]ord(\"1\")=" . ord("1") . "\n";




/**
 * chunk_split()
 * 
 * Splits a string into chunks at a specific length, and with an optional separator.
 */

    /* With no length */
    echo "[4.0] chunk_split(\"one two three four five six seven eight nine ten\")=";
    echo chunk_split("one two three four five six seven eight nine ten") . "\n";

    /* With chunks of 10 */
    echo "[4.1] chunk_split(\"one two three four five six seven eight nine ten\", 10)=";
    echo chunk_split("one two three four five six seven eight nine ten", 10) . "\n";

    /* With chunks of 5 */
    echo "[4.2] chunk_split(\"one two three four five six seven eight nine ten\", 5)=";
    echo chunk_split("one two three four five six seven eight nine ten", 5) . "\n";

    /* With chunks of 1 and a full stop as separator */
    echo "[4.3] chunk_split(\"one two three four five six seven eight nine ten\", 1, \".\")=";
    echo chunk_split("one two three four five six seven eight nine ten", 1, ".") . "\n";

/**
 * count_chars()
 * 
 * Counts the number of characters in a string.
 */
    /* Returns an array of every ascii char and its count */
    echo "[5.0] count_chars(\"abcaba\", 0)=\n";
    // var_dump(count_chars("abcaba", 0)) . "\n";

    /* Returns an array of count for the ascii chars in the string */
    echo "[5.1] count_chars(\"abcaba\", 1)=";
    var_dump(count_chars("abcaba", 1)) . "\n";

    /* Returns an array containing all ascii chars that were not in the string */
    echo "[5.2] count_chars(\"abcaba\", 2)=\n";
    // var_dump(count_chars("abcaba", 2)) . "\n";

    /* Returns a string with all unique chars */
    echo "[5.3] count_chars(\"abcaba\", 3)=";
    echo count_chars("abcaba", 3) . "\n";

    /* Returns a string with chars not used in the string */
    echo "[5.4] count_chars(\"abcaba\", 4)=";
    echo count_chars("abcaba", 4) . "\n";

/**
 * crypt()
 * 
 * Encrypt a string, with a salt into a hash.
 * If used for passwords, suggest to use password_hash() instead.
 */
    /* Encrypts a string with a salt. */
    echo "[6.0] crypt(\"one two three\", \"SGtZ6eM8NEr3s8g3\")=";
    echo crypt("one two three", "SGtZ6eM8NEr3s8g3") . "\n";


    