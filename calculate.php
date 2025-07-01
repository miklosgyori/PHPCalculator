<?php
$szam1 = '';
$szam2 = '';
$muvelet = '';
$hiba = [];
$eredmeny = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $szam1 = trim($_POST['szam1'] ?? '');
    $szam2 = trim($_POST['szam2'] ?? '');
    $muvelet = trim($_POST['muvelet'] ?? '');

    if (!is_numeric($szam1)) {
        $hiba[] = '1. szám: nem számot adott meg. Adjon meg számot!';
    }

    if (!is_numeric($szam2)) {
        $hiba[] = '2. szám: nem számot adott meg. Adjon meg számot!';
    }

    if (($muvelet == '/') && (floatval($szam2) == '0')) {
        $hiba[] = 'Az osztó nem lehet 0! Adjon meg másik számot!';
    }

    if(empty($hiba)){
        $o1 = floatval($szam1);
        echo $o1; /* TODO: tesztelésre, végén törölni */
        echo "<br>";
        echo $muvelet;
        echo "<br>";
        $o2 = floatval($szam2);
        echo $o2; /* TODO: tesztelésre, végén törölni */
        echo "<br>";
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
        echo $eredmeny; /* TODO: tesztelésre, végén törölni */
    }
    else {   /* TODO: tesztelésre, végén törölni */
        foreach ($hiba as $h) {
            echo $h; 
            echo "<br>";
        }
    }
}
?>