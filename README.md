# PHPCalculator / PHP Webszámológép
egyetemi beadandó, GDE "Internetes alkalmazásfejlesztes 2", 2025. június-július
készítette: Győri Miklós Dr. UTH2H2

## Publikus Git repo
https://github.com/miklosgyori/PHPCalculator

## Leírás
Egyszerű, 2 forrásfájlból álló PHP webes számológép. Két számot (operandus) és egy műveleti jelet kér be. Ellenőrzi a bemeneteket (csak számok lehetnek, nem enged nulla osztót, művelet választása kötelező). Az eredményt újonnan generált oldalon jeleníti meg. Utóbbiról egy kattintással a beviteli felületre juthat a felhasználó.

## Funkciók
- Összeadás, kivonás, szorzás, osztás, két számmal (operandussal)  
- Bemenet-ellenőrzés:  
  - Csak numerikus értékek elfogadottak, tizedes tört jelölése ponttal
  - Nullával való osztás nem elfogadott
  - Művelet kiválasztása kötelező
  - operandusok vagy művelet hiánya nem elfogadott
- Kimenet: külön, újonnan generált oldalon
    - 'Hiba' oldal: bementi hibákra vonatkozó figyelmeztetés(ek)
    - 'Eredmény' oldal: az elvégzett művelet és eredménye
- Eredmény oldalról a böngésző "vissza" gombjával visszatérve a beírt értékek megmaradnak a űrlapban
- Eredmény oldalról az oldal "Vissza a beviteli felületre" gombjával visszatérve a beírt értékek törlődnek az űrlapból

## Követelmények
- PHP preferáltan 8.4, minimum 7.0
- PHP-t támogató webszerver
- böngésző

## Telepítés
0. PHP és webszerver telepítése és/vagy indítása, ha még nem történt meg
1. Repó klónozása vagy forráskód letöltése  
2. `index.php` és `calculate.php` ugyanabba a mappába kerüljön
3. Böngészőben: `http://szerver/mappa/index.php` (pld. http://localhost:8000/index.php)

## Használat
1. Nyisd meg az `index.php`-t a böngésződben.  
2. Írd be a két számot és válassz egy műveleti jelet a legördülő listából.  
3. Kattints a "Számol" gombra.  
4. Az eredmény vagy az esetleges hibák új oldalon jelennek.
5. "Vissza a beviteli felületre" gomb visszavisz az üres űrlapra. (Böngésző "Vissza" gombja az előzőleg kitöltött űrlapra.)

## Fájlstruktúra
PHPCalculator
|
├─ index.php (űrlap)
├─ calculate.php (input validáció, számolás, válaszoldal generálás)
├─ README.md (ez a dokumentum)
└─ munkafolyamat.txt (implementáció lépéseinek leírása)

## Továbbfejlesztési lehetőségek
- esztétikusabb UI
- css használata
- tömörebb kód (pld. <br> tömörebb használata, Javascript használata, ahol adekvát).
