<!DOCTYPE hmtl>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <title>Egyszerű PHP webszámológép</title>
</head>

<body>

    <h1>PHP webszámológép</h1>

    <p><i> Tizedes törtek ponttal jelölendőek! (Pld. 1.1)</p></i>

    <form action="calculate.php" method="post">
        <label>
            1. szám:
            <input type="text" name="szam1" required>
        </label>
        <br>
        <br>
        
        <label>
            Művelet:
            <select name="muvelet" required>
                <option value="">Válassz!</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">:</option>
            </select>
        </label>
        <br>
        <br>
        
        <label>
            2. szám:
            <input type="text" name="szam2" required>
        </label>
        <br>
        <br>
        
        <button type="submit">Számol</button>
    
    </form>

</body>
</html>
