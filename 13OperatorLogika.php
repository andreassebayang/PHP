<?php
// Oerator logika adalah operator untuk membandingkan dua nilai boolean
// Hasil dari operator logika adlaah boolean lagi

// |==============================================================================================|
// |     Operator       |     Nama     |                         Hasil                            |           
// |==============================================================================================|
// | $a && $b          | And           | True jika $a dan $b keduanya true                        |
// | $a and $b         | And           | True jika $a dan $b keduanya true                        |
// | $a || $b          | Or            | True jika $a dan $b salah satu atau keduanya true        |
// | $a or $b          | Or            | True jika $a dan $b salah satu atau keduanya true        |
// | !$a               | Not           | True jika $a bernilai false                              |
// | $a xor $b         | Xor           | True jika $a dan $b salah satu true, tapi tidak keduanya | 
// |==============================================================================================|

var_dump(true && true);
var_dump(true && false);

var_dump(true and true);
var_dump(true and false);

var_dump(true || true);
var_dump(true || false);

var_dump(true or true);
var_dump(true or false);

var_dump(!true );
var_dump(!false);

var_dump(true xor true);
var_dump(true xor false);