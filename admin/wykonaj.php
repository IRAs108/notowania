<?php

require_once "../connect.php";
$conn = @new mysqli($host, $db_user, $db_password, $db_name);

$notowanie = (int)$_GET["id"];
$datanotowania = date('Y-m-d', strtotime($_GET['data']));

$pozycja_01 = (int)$_GET["lista_u01"];
$pozycja_02 = (int)$_GET["lista_u02"];
$pozycja_03 = (int)$_GET["lista_u03"];
$pozycja_04 = (int)$_GET["lista_u04"];
$pozycja_05 = (int)$_GET["lista_u05"];
$pozycja_06 = (int)$_GET["lista_u06"];
$pozycja_07 = (int)$_GET["lista_u07"];
$pozycja_08 = (int)$_GET["lista_u08"];
$pozycja_09 = (int)$_GET["lista_u09"];
$pozycja_10 = (int)$_GET["lista_u10"];
$pozycja_11 = (int)$_GET["lista_u11"];
$pozycja_12 = (int)$_GET["lista_u12"];
$pozycja_13 = (int)$_GET["lista_u13"];
$pozycja_14 = (int)$_GET["lista_u14"];
$pozycja_15 = (int)$_GET["lista_u15"];
$pozycja_16 = (int)$_GET["lista_u16"];
$pozycja_17 = (int)$_GET["lista_u17"];
$pozycja_18 = (int)$_GET["lista_u18"];
$pozycja_19 = (int)$_GET["lista_u19"];
$pozycja_20 = (int)$_GET["lista_u20"];
$pozycja_21 = (int)$_GET["lista_u21"];
$pozycja_22 = (int)$_GET["lista_u22"];
$pozycja_23 = (int)$_GET["lista_u23"];
$pozycja_24 = (int)$_GET["lista_u24"];
$pozycja_25 = (int)$_GET["lista_u25"];

$pop_01 = (int)$_GET["lista_p01"];
$pop_02 = (int)$_GET["lista_p02"];
$pop_03 = (int)$_GET["lista_p03"];
$pop_04 = (int)$_GET["lista_p04"];
$pop_05 = (int)$_GET["lista_p05"];
$pop_06 = (int)$_GET["lista_p06"];
$pop_07 = (int)$_GET["lista_p07"];
$pop_08 = (int)$_GET["lista_p08"];
$pop_09 = (int)$_GET["lista_p09"];
$pop_10 = (int)$_GET["lista_p10"];
$pop_11 = (int)$_GET["lista_p11"];
$pop_12 = (int)$_GET["lista_p12"];
$pop_13 = (int)$_GET["lista_p13"];
$pop_14 = (int)$_GET["lista_p14"];
$pop_15 = (int)$_GET["lista_p15"];
$pop_16 = (int)$_GET["lista_p16"];
$pop_17 = (int)$_GET["lista_p17"];
$pop_18 = (int)$_GET["lista_p18"];
$pop_19 = (int)$_GET["lista_p19"];
$pop_20 = (int)$_GET["lista_p20"];
$pop_21 = (int)$_GET["lista_p21"];
$pop_22 = (int)$_GET["lista_p22"];
$pop_23 = (int)$_GET["lista_p23"];
$pop_24 = (int)$_GET["lista_p24"];
$pop_25 = (int)$_GET["lista_p25"];
echo $notowanie;
echo $datanotowania;




$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_01,1,$pop_01)";

if ($conn->query($sql) === TRUE) {
    echo "01OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_02,2,$pop_02)";

if ($conn->query($sql) === TRUE) {
    echo ")02OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_03,3,$pop_03)";

if ($conn->query($sql) === TRUE) {
    echo ")03OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_04,4,$pop_04)";

if ($conn->query($sql) === TRUE) {
    echo ")04OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_05,5,$pop_05)";

if ($conn->query($sql) === TRUE) {
    echo ")05OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_06,6,$pop_06)";

if ($conn->query($sql) === TRUE) {
    echo ")06OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_07,7,$pop_07)";

if ($conn->query($sql) === TRUE) {
    echo ")07OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_08,8,$pop_08)";

if ($conn->query($sql) === TRUE) {
    echo ")08OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_09,9,$pop_09)";

if ($conn->query($sql) === TRUE) {
    echo ")09OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_10,10,$pop_10)";

if ($conn->query($sql) === TRUE) {
    echo ")10OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_11,11,$pop_11)";

if ($conn->query($sql) === TRUE) {
    echo ")11OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_12,12,$pop_12)";

if ($conn->query($sql) === TRUE) {
    echo ")12OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_13,13,$pop_13)";

if ($conn->query($sql) === TRUE) {
    echo ")13OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_14,14,$pop_14)";

if ($conn->query($sql) === TRUE) {
    echo ")14OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_15,15,$pop_15)";

if ($conn->query($sql) === TRUE) {
    echo ")15OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_16,16,$pop_16)";

if ($conn->query($sql) === TRUE) {
    echo ")16OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_17,17,$pop_17)";

if ($conn->query($sql) === TRUE) {
    echo ")17OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_18,18,$pop_18)";

if ($conn->query($sql) === TRUE) {
    echo ")18OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_19,19,$pop_19)";

if ($conn->query($sql) === TRUE) {
    echo ")19OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_20,20,$pop_20)";

if ($conn->query($sql) === TRUE) {
    echo ")20OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_21,21,$pop_21)";

if ($conn->query($sql) === TRUE) {
    echo ")21OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_22,22,$pop_22)";

if ($conn->query($sql) === TRUE) {
    echo ")22OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_23,23,$pop_23)";

if ($conn->query($sql) === TRUE) {
    echo ")23OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_24,24,$pop_24)";

if ($conn->query($sql) === TRUE) {
    echo ")24OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO pozycje VALUES ('',$notowanie,'$datanotowania',$pozycja_25,25,$pop_25)";

if ($conn->query($sql) === TRUE) {
    echo ")25OK;";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();


?>