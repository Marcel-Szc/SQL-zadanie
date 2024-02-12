<?php 
//połączenie z BD
include_once("polaczenie.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ćwiczenie 1</title>
</head>
<body>
    <h1>STRONA STARTOWA</h1>
    <ul>
    <li> 
            <a href="all.php"> wszystkie osoby </a>
        </li>
        <li> 
            <a href="19do50.php"> wszystkie osoby od 19 do 50 </a>
        </li>
        <li> 
            <a href="10do18.php"> wszystkie osoby od 10 do 18 </a>
        </li>
    </ul>
</body>
</html>
<?php 
  //rozłączenie BD
 $polaczenie->close();
?>