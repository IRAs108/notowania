<?php

  require_once "../connect.php";
   $notowanie = (int)$_GET["id"];

  $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if ($polaczenie->connect_errno!=0)
    {
         echo "Error: ".$polaczenie->connect_errno."Opis: ".$polaczenie->connect_error;
    }

    else
    {

     $sql="SELECT pozycje.pozycja, utwory.idutw, utwory.artist, utwory.title, utwory.remix, utwory.debiut, utwory.debiutnotowanie, utwory.youtube, pozycje.poprzednio  FROM utwory, pozycje WHERE notowanie=$notowanie AND utwory.idutw=pozycje.utwor ORDER BY pozycje.pozycja";

         if($rezultat = @$polaczenie->query($sql))
         {


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
            $idxutw = $wiersz['idutw'];

            $iletyg = $notowanie - $debiutnotowanie;

           //  echo $pozycja.". ".$wykonawca." - ".$tytul."[".$idxutw."]<br>";

             $lista_utworow = $lista_utworow."<option value=".$idxutw.">".$wykonawca." - ".$tytul."</option>";
            }



           // echo "<option value=$notowanie>$notowanie z dnia [$data]</option>";
           // echo "$notowanie z dnia [$data]<br>";

           //wpierdolic tutaj drugie zapyt.
           $sql="select * from utwory order by idutw DESC limit 10;";

            if($rezultat = @$polaczenie->query($sql))
         {

                      $ile_utworow = $rezultat->num_rows;
        for ($i = 0; $i<$ile_utworow; $i++)

            {

            $wiersz = $rezultat->fetch_assoc();
            $wykonawca = $wiersz['artist'];
            $tytul = $wiersz['title'];
            $remix = $wiersz['remix'];
            $idxutw = $wiersz['idutw'];

            $iletyg = $notowanie - $debiutnotowanie;


             $lista_utworow = $lista_utworow."<option value='".$idxutw."'>".$wykonawca." - ".$tytul."</option>";
            }





              $rezultat->free();
             $polaczenie->close();

             }
             else
             {
              echo "ERROR!";
             }






         }
    }

for ($i = 0; $i<26; $i++)
{
     $poprz_val=$poprz_val."<option value='".$i."'>".$i."</option>";

}



 echo "<form action='wykonaj.php' method='get'>
 Notowanie:<input type='text' name='id' />
 Data [RRRR-MM-DD]:<input type='text' name='data' /><br>
01. <select name='lista_u01'>".$lista_utworow."</select><select name='lista_p01'>".$poprz_val."</select><br>
02. <select name='lista_u02'>".$lista_utworow."</select><select name='lista_p02'>".$poprz_val."</select><br>
03. <select name='lista_u03'>".$lista_utworow."</select><select name='lista_p03'>".$poprz_val."</select><br>
04. <select name='lista_u04'>".$lista_utworow."</select><select name='lista_p04'>".$poprz_val."</select><br>
05. <select name='lista_u05'>".$lista_utworow."</select><select name='lista_p05'>".$poprz_val."</select><br>
06. <select name='lista_u06'>".$lista_utworow."</select><select name='lista_p06'>".$poprz_val."</select><br>
07. <select name='lista_u07'>".$lista_utworow."</select><select name='lista_p07'>".$poprz_val."</select><br>
08. <select name='lista_u08'>".$lista_utworow."</select><select name='lista_p08'>".$poprz_val."</select><br>
09. <select name='lista_u09'>".$lista_utworow."</select><select name='lista_p09'>".$poprz_val."</select><br>
10. <select name='lista_u10'>".$lista_utworow."</select><select name='lista_p10'>".$poprz_val."</select><br>
11. <select name='lista_u11'>".$lista_utworow."</select><select name='lista_p11'>".$poprz_val."</select><br>
12. <select name='lista_u12'>".$lista_utworow."</select><select name='lista_p12'>".$poprz_val."</select><br>
13. <select name='lista_u13'>".$lista_utworow."</select><select name='lista_p13'>".$poprz_val."</select><br>
14. <select name='lista_u14'>".$lista_utworow."</select><select name='lista_p14'>".$poprz_val."</select><br>
15. <select name='lista_u15'>".$lista_utworow."</select><select name='lista_p15'>".$poprz_val."</select><br>
16. <select name='lista_u16'>".$lista_utworow."</select><select name='lista_p16'>".$poprz_val."</select><br>
17. <select name='lista_u17'>".$lista_utworow."</select><select name='lista_p17'>".$poprz_val."</select><br>
18. <select name='lista_u18'>".$lista_utworow."</select><select name='lista_p18'>".$poprz_val."</select><br>
19. <select name='lista_u19'>".$lista_utworow."</select><select name='lista_p19'>".$poprz_val."</select><br>
20. <select name='lista_u20'>".$lista_utworow."</select><select name='lista_p20'>".$poprz_val."</select><br>
21. <select name='lista_u21'>".$lista_utworow."</select><select name='lista_p21'>".$poprz_val."</select><br>
22. <select name='lista_u22'>".$lista_utworow."</select><select name='lista_p22'>".$poprz_val."</select><br>
23. <select name='lista_u23'>".$lista_utworow."</select><select name='lista_p23'>".$poprz_val."</select><br>
24. <select name='lista_u24'>".$lista_utworow."</select><select name='lista_p24'>".$poprz_val."</select><br>
25. <select name='lista_u25'>".$lista_utworow."</select><select name='lista_p25'>".$poprz_val."</select><br>
<input type='submit'>WYSLIJ</input>



 </form>";



?>