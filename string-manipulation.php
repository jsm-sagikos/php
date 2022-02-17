<?php

/* Useful functions and tips around string manipulation in PHP. */


/**
 * chr()
 * 
 * Returns a string for an ascii number, e.g. 49 = "1".
 */
    echo chr(49);       

    /**
     * Build an UTF-8 string from individual bytes by concatenating chrs:
     */
    $str = chr(240) . chr(159) . chr(144) . chr(152);
    echo $str;


/**
 * ord()
 * 
 * Returns the ascii number for a string, e.g. "1" = 49.
 */
    echo ord("1");      



