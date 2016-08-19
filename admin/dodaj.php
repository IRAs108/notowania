<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta name="lang" content="pl"/>
</head>
<body>
<h1>DODAWANIE UTWORU DO LISTY</h1>
<hr/>

<?php
require_once "../connect.php";


if (empty($_GET['artist']) OR empty($_GET['title']) OR empty($_GET['debiut']) OR empty($_GET['relase']) OR empty($_GET['rok']) OR empty($_GET['youtube']) OR empty($_GET['debiutnotowanie'])) {
    // brak jakiejs zmiennej w formularzu
    echo('Podaj dane jeszcze raz:<br><br><form action="" method="GET">Wykonawca: <input type="text" name="artist" /><br>Tytul utworu: <input type="text" name="title" /><br>Remix: <input type="text" name="remix" /><br>Debiut: <input type="date" name="debiut" /><br>Relase: <input type="date" name="relase" /><br>Rok: <input type="int" name="rok" /><br>Youtube link: <input type="text" name="youtube" /><br>Debiut notowanie: <input type="int" name="debiutnotowanie" /><br><button type="submit">Wyślij</button><br></form>');


}
else
{
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if ($polaczenie->connect_errno!=0)
    {
         echo "Error: ".$polaczenie->connect_errno."Opis: ".$polaczenie->connect_error;
    }

    else
    {
    $artist=$_GET['artist'];
    $title=$_GET['title'];
    $remix=$_GET['remix'];
    $debiut=$_GET['debiut'];
    $relase=$_GET['relase'];
    $rok=$_GET['rok'];
    $youtube=$_GET['youtube'];
    $debiutnotowanie=$_GET['debiutnotowanie'];

    $sql = "INSERT INTO utwory VALUES (NULL,'$artist','$title','$remix','$debiut','$relase','$rok','$youtube','$debiutnotowanie')";

    if($rezultat = @$polaczenie->query($sql))
    {
    echo("<h1>DODANO:".$artist." - ".$title."</h1>");
    }
     else
    {
    echo "Blad!";
    }


}

echo('DODANO!');
}


?>





</body>
</html>