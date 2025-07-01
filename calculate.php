<?php
$szam1 = '';
$szam2 = '';
$muvelet = '';
$hiba[] = '';
$eredmeny = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $szam1 = trim($_POST['szam1'] ?? '');
    $szam2 = trim($_POST['szam2'] ?? '');
    $muvelet = trim($_POST['muvelet'] ?? '');

    /* TODO: input ellenőrzések */

    if(empty($hiba)){
        $o1 = floatval($szam1);
        $o2 = floatval($szam2);
        switch($muvelet){
            case '+':
                $eredmeny = $o1 + $o2;
                break;
            case '-':
                $eredmeny = $o1 - $o2;
                break;
            case '*':
                $eredmeny = $o1 * $o2;
                break;
            case '/':
                $eredmeny = $o1 / $o2;
                break;
        }

        /* TODO: tesztelésre, végén törölni: */
        echo $eredmeny;

    }

}

?>