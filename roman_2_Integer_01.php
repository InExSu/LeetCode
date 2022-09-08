<?php

/**
 * @param String $s
 * @return Integer
 */
function romanToInt(string $s): int
{

    $number = 0;
    $sLen = strlen($s);

    $arr = str_split($s);

    for ($i = 0; $i < $sLen; $i++) {

        switch ($arr[$i]) {
            case 'M':
                $number += 1000;
                break;
            case 'D':
                $number += 500;
                break;
            case 'C':
                if ($i + 1 < $sLen) {
                    switch ($arr[$i + 1]) {
                        case 'D':
                            $number += +400;
                            $i++;
                            break;
                        case 'M':
                            $number += +900;
                            $i++;
                            break;
                        default:
                            $number+=100;
                    }
                } else {
                    $number+=100;
                }
                break;
            case 'L':
                $number += 50;
                break;
            case 'X':
                if ($i + 1 < $sLen) {
                    switch ($arr[$i + 1]) {
                        case 'L':
                            $number += +40;
                            $i++;
                            break;
                        case 'C':
                            $number += +90;
                            $i++;
                            break;
                        default:
                            $number+=10;
                    }
                } else {
                    $number+=10;
                }
                break;
            case 'V':
                $number += 5;
                break;
            case 'I':
                if ($i + 1 < $sLen) {
                    switch ($arr[$i + 1]) {
                        case 'V':
                            $number += +4;
                            $i++;
                            break;
                        case 'X':
                            $number += +9;
                            $i++;
                            break;
                        default:
                            $number++;
                    }
                } else {
                    $number++;
                }
                break;
        }
    }
    return $number;
}

function two(string $symb, string $next, &$numb, &$i):void {

}

function romanToInt_Test()
{
    $assertion = romanToInt('II');
    assert($assertion == 2);
    $assertion = romanToInt('V');
    assert($assertion == 5);
    $assertion = romanToInt('IV');
    assert($assertion == 4);
    $assertion = romanToInt('VI');
    assert($assertion == 6);
    $assertion = romanToInt('IX');
    assert($assertion == 9);
    $assertion = romanToInt('CM');
    assert($assertion == 900);
    $assertion = romanToInt('LVIII');
    assert($assertion == 58);
    $assertion = romanToInt("DCXXI");
    assert($assertion == 621);
    $assertion = romanToInt("MDLXX");
    assert($assertion == 1570);

}

romanToInt_Test();