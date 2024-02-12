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
    <title>10 do 18</title>
</head>
<body>
    <nav>
   
    
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
   </nav>
    <h3>
            ILOŚĆ REKORDÓW W ZAPYTANIU:
            <?php 
            $ile = $polaczenie->query("SELECT COUNT(ID) as ilerekordow FROM bazacsv WHERE WIEK BETWEEN 10 and 18;");
            list($ilerekordow)=mysqli_fetch_row($ile);
            echo ("$ilerekordow");
            ?>
        </h3>
    <div class="osoby10_18">
        <?php 
        $zapytanie = $polaczenie->query("SELECT bazacsv.ID, bazacsv.IMIE, bazacsv.NAZWISKO, bazacsv.WIEK FROM bazacsv WHERE WIEK BETWEEN 10 and 18;");
        echo "<ul>";
        while(list($id,$imie,$nazwisko,$wiek)=mysqli_fetch_row($zapytanie))
        {
            echo("<li><b>$id</b> <i>$imie, $nazwisko, $wiek</i></li>");
        }
        echo "</ul>";
        ?>
    </div>
</body>
</html>
<?php 
  //rozłączenie BD
 $polaczenie->close();
?>