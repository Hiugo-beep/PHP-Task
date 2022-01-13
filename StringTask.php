<?php   ##Сложить несколько строк.
    $str1 = "Hello";
    $str2 = ", world";
    $str3 = "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
    $str = $str1 . $str2 . $str3;   #Hello, world!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!


    ##2 - Проверить содержит ли строка A подстроку B.
    $a2 = "Hey, dude";
    $b2 = "Hey";
    $isB2ContainA2 = strpos ($a2, $b2) !== false;   #true


    ##3 - Строка А содержит подстроку B. Найти и заменить подстроку B на подстроку С..
    echo "<br /><br />3<br />";
    $a3 = "HEY HI HELLO";
    $b3 = "HEY";
    $c3 = "HOLA";
    $a3 = str_replace($b3, $c3, $a3);   #HOLA HI HELLO


    ##4 - Получить первые 10 символов строки.
    $str4 = "AaBbCcDdEeFfGgHhIiKk";
    $first10Symbols = mb_substr($str4, 0, 10);   #AaBbCcDdEe


    ##5 - Получить последние 10 символов строки.
    $str5 = "AaBbCcDdEeFfGgHhIiKk";
    $last10Symbols = mb_substr($str5, -10);  #FfGgHhIiKk


    ##6 - Строка А содержит подстроку B. Вывести все, что находится слева от строки B.
    $a6 = "HEY ssshey Heyaa hEllo HELLO YO";
    $b6 ="hey Hey";
    $length = mb_strpos($a6,$b6);
    $firstSymbols = mb_substr($a6, 0, $length);  #HEY sss


    ##7 - Строка А содержит подстроку B. Вывести все, что находится справа строки B.
    $a7 = "HEY ssshey Heyaa hEllo HELLO YO";
    $b7 ="hey Hey";
    $startIndex = mb_strpos($a7,$b7) + strlen($b7);
    $lastSymbols = mb_substr($a7, $startIndex);  #aa hEllo HELLO YO
