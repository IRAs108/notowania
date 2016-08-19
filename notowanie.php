<?php

    echo "<body>";
    require_once "connect.php";
    $notowanie_get = (int)$_GET["id"];








  $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($polaczenie->connect_errno!=0)
    {
         echo "Error: ".$polaczenie->connect_errno."Opis: ".$polaczenie->connect_error;
    }

    else
    {
         if ($notowanie_get>0)
         {
           include_once("analyticstracking.php");
          $notowanie=$notowanie_get;
         }
         else
         {
         $notowanie=$_POST['notowanie'];
         header("Location: notowanie.php?id=$notowanie");

         }
         $sql="SELECT data, link FROM notowania WHERE notowanie=".$notowanie;
         if($rezultat = @$polaczenie->query($sql))

         {
              $wiersz = $rezultat->fetch_assoc();
              $data = $wiersz['data'];
              $audio = $wiersz['link'];
              $rezultat->free();
              //$polaczenie->close();
         }

         $sql="SELECT * FROM notowania WHERE notowanie='$notowanie'";

          if($rezultat = @$polaczenie->query($sql))
         {
              $czy_jest_notowanie = $rezultat->num_rows;
              //echo $czy_jest_notowanie;

             // echo "Poprawnie";

         }


         if ($czy_jest_notowanie==1)

         {
        // echo "Wybrano: ".$notowanie." z dnia".$data."<br><br>";

         $sql="SELECT pozycje.pozycja, utwory.artist, utwory.title, utwory.remix, utwory.debiut, utwory.debiutnotowanie, utwory.youtube, pozycje.poprzednio  FROM utwory, pozycje WHERE notowanie=$notowanie AND utwory.idutw=pozycje.utwor ORDER BY pozycje.pozycja";

         if($rezultat = @$polaczenie->query($sql))
         {

         echo "<h3><font color='blue'>LISTA MEGA BEAT DANCE CHART 20 - NOTOWANIE ".$notowanie." Z DNIA ".$data."</font></h3>";

         echo "<table width=65% border='4' style='border-collapse: collapse; border: 3px solid black;'><tr bgcolor='blue' ><td><font color='white'>POZ.</font></td><td><font color='white'>WYKONAWCA:</font></td><td><font color='white'>TYTUL:</font></td><td><font color='white'>POZYCJA<br>Z POPRZEDNIEGO<br>NOTOWANIA</font></td><td><font color='white'>ILE<br>TYGODNI<br>NA LISCIE</font></td></tr>";

         $youtube_link="";
         $mozliwosci= "";
        $ile_utworow = $rezultat->num_rows;
        for ($i = 0; $i<$ile_utworow; $i++)

            {

            $wiersz = $rezultat->fetch_assoc();
            $pozycja = $wiersz['pozycja'];
            $wykonawca = $wiersz['artist'];
            $tytul = $wiersz['title'];
            $remix = $wiersz['remix'];
            $debiut = $wiersz['debiut'];
            $youtube = $wiersz['youtube'];
            $poprzednio = $wiersz['poprzednio'];
            $debiutnotowanie = $wiersz['debiutnotowanie'];
            if ($poprzednio==0)
            {
             $poprzednio="<font color='red'>NOWOSC!</font>";
            }

            if ($i==20)

            {

            echo "</table><br><p lign='center'><b>POCZEKALNIA</b></p><br><table width=65% border='4' style='border-collapse: collapse; border: 3px solid black;'";

            }

            $iletyg = $notowanie - $debiutnotowanie;
            echo "<tr>";
            echo "<td bgcolor='blue'><font color='white'><b>".$pozycja."</b></font>.</td> <td><b>".$wykonawca."</b></td> <td><b>".$tytul."</b><br> (".$remix.")</td><td>$poprzednio</td><td>".$iletyg."</td>";
            echo "</tr>";

            if ($youtube_link=="")
            {
            $youtube_link=$youtube;
            }
            else
            {
            $youtube_link=$youtube_link.",".$youtube;
            }
            }
           // echo "<option value=$notowanie>$notowanie z dnia [$data]</option>";
           // echo "$notowanie z dnia [$data]<br>";

           echo "</table>";


              $rezultat->free();
             $polaczenie->close();
             }
             else
             {
              echo "ERROR!";
             }

             $youtube_link="https://www.youtube.com/watch_videos?video_ids=".$youtube_link;
             //echo $youtube_link;
             echo "<br><br>";
             echo "<h2><a href='$youtube_link'>Generuj playliste YouTube</a></h2>";

            // echo "<iframe width='560' height='315' src='$youtube_link' frameborder='3' allowfullscreen></iframe>";
            echo "$audio";
            echo "<br><br><h3><a href='index.php'>Powrot</a></h3>";
             echo "</body>";
         }
         else
         {
              echo "<h1>Notowania $notowanie nie ma jeszcze w naszej bazie danych. Z czasem sie uzupelni.</h1>";

         }
    }
?>