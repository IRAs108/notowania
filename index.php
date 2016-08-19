<?php
  include_once("analyticstracking.php");
  require_once "connect.php";

  $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
  $notowanie = (int)$_GET["id"];


  if ($notowanie > 0)

  {
    header("Location: notowanie.php?id=$notowanie");
    die();
  }

    if ($polaczenie->connect_errno!=0)
    {
         echo "Error: ".$polaczenie->connect_errno."Opis: ".$polaczenie->connect_error;
    }

    else
    {

     $sql = "SELECT * FROM notowania ORDER BY notowanie DESC";
         if($rezultat = @$polaczenie->query($sql))
    {


        $ile_notowan = $rezultat->num_rows;

        echo "<b>Notowan w bazie: ".$ile_notowan."</b><br><br>";
        echo "Wybierz notowanie:";
        echo "<form action='notowanie.php' method='post'>";
         echo "<select name='notowanie'>";
        for ($i = 0; $i<$ile_notowan; $i++)
        {

            $wiersz = $rezultat->fetch_assoc();
            $notowanie = $wiersz['notowanie'];
            $data = $wiersz['data'];

            echo "<option value=$notowanie>$notowanie z dnia [$data]</option>";

           // echo "$notowanie z dnia [$data]<br>";

        }

        echo"</select>";
        echo "<input type='submit' value='POKAZ'>";
        echo "</form>";


        $rezultat->free();
    }

    else
    {
    echo "Blad!";
    }


    //echo "It works";



    $polaczenie->close();




    }

?>