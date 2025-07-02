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
    }
}
?>


<!DOCTYPE hmtl>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <title>Egyszerű PHP webszámológép</title>
</head>

<body>

    <?php if (!empty($hiba)): ?>
        <h1>PHP webszámológép: <span style="color: red;">hiba!</span></h1>
        <?php foreach ($hiba as $h): ?>
           <p><?= htmlspecialchars($h) ?></p> 
        <?php endforeach; ?>
        <br>
    <?php else: ?>
        <h1>PHP webszámológép: <span style="color: green;">eredmény</span></h1>
        <h2><?= htmlspecialchars($o1) ?>
        <?= htmlspecialchars($muvelet) ?>
        <?= htmlspecialchars($o2) ?>
        <?= " = " ?>
        <?= htmlspecialchars($eredmeny) ?></h2>
        <br>
    <?php endif; ?>

    <form action="index.php" method="get" style="display:inline;">
        <button type="submit">Vissza a beviteli felületre</button>
    </form>

</body>
</html>
