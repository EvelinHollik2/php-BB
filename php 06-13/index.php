<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Php-1 VC</title>

</head>
<body>
    <div>Az első php oldalam</div>
    <form name="urlap" method="POST">
        <div>
        <label for="nev">Név:</label>
        <input type="text" name="nev" id="nev" value="Tamás"/> <br>
        <label for="age">Kor:</label>
        <input type="number" name="age" id="age" value=""/> <br>
        <input type="submit" value="küld" name="send"/></br>
        </div>
    </form>

    <a href="elso.php?nev='Kati'&kor='19'&id='2'">Az első php oldalam</a>
    
    <?php
    

    $elemek ="<table>";
    foreach ($_POST as $key => $value) {
        $elemek.="<tr><td>$key</td><td>$value</td></tr>";
    }
    $elemek .="</table>";
    echo $elemek;

    $szamok = [1, 2, 3, 4, 5];
    $szamok [] = 7;
    $szamok[50] = 'i';
    echo $szamok[0] ."<br>";
    for ($i=0; $i < count($szamok); $i++) { 
        echo $szamok[$i] . "<br>";
    }

    foreach ($szamok as $value) {
        echo $value . "<br>";
    }

    foreach ($szamok as $key => $value) {
        echo $key.":" . $value . "<br>";
    }


    //echo "Szia Dobozos ";
    //foreach ($adat as $kulcs =>$ertek){
    
    //}
    //$a ="<b>Marci</b>"; //változó $-ral
    //$b= "Dobozos";
    //echo "<hr><pre>"; //pre: minden szóüközt figyel. Elrendezésben segít
    //print_r($_SERVER);
    //echo "</pre><hr>";
    //echo "<br>Szia Marci";
    //echo "<br>Szia $b";
    //echo '<br>Szia $b';
    //echo "<br>" . $a; // . összefűzés (+)

    //echo "<hr><pre>"; 
    //echo '$ GET:';
    //print_r($_GET);
    //echo "</pre><hr>";

    //echo "<hr><pre>"; 
    //echo '$ Post:';
    //print_r($_POST);
    //echo "</pre><hr>";
    //if (isset($_POST['send'])) {
    //    echo "Lenyomták a küld gombot";
    //}

    //echo "<br>Név:" . $_POST['nev'];
    //echo "<br>Kor:" . $_POST['age'];
    ?>
</body>
</html>