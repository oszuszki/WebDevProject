<!DOCTYPE html>
<html lang = "hu">
<head>
    <title>Bejelentkezés</title>
</head>
<body>

<?php

include 'allyouneed.php';

$username = $_POST["email"];
$password = $_POST["password"];

if (is_int(strpos($decoded, $username . "*" . $password)) == 1){
    $conn = mysqli_connect("localhost", "root", "") or die ("Nem sikerült kapcsolódni az adatbázis szerverhez"); 
    mysqli_select_db($conn, "adatok");

    $sql = "select Titkos from tabla where Username = '$username'";
    $result = $conn->query($sql);
    $color = $result->fetch_assoc();

    $colors = array("piros" => "#E84638", "zold" => "#00CC66","sarga" => "#EAFF6A", "kek" => "#B3C7D6FF","fekete" => "#4F4D49","feher" => "#FCF5E7");
    $color_hex = $colors[$color["Titkos"]];
    echo "<script>
                document.body.style.backgroundColor ='$color_hex'
              </script>";
}
else{
    if (is_int(strpos($decoded, $password)) == 1) {
        echo "HIBAÜZENET: nincs ilyen felhasználó";
        header("refresh:3; url=http://www.police.hu/");
    }
    if (is_int(strpos($decoded, $username)) == 1) {
        echo "HIBAÜZENET: hibás jelszó";
        header("refresh:3; url=http://www.police.hu/");
    }
}


?>

</body>
</html>