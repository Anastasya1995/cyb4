<?php
    $x=$_REQUEST["x"];
    $y=$_REQUEST["y"];
    $z=$x+$y;
    sleep(1); //симуляция задержки

// Здесь нарушены все мыслимые нормы безопасности:
// 1. Weak password (Cлабый парооль);
// 2. Principle of least privilege (Нарушен принцип наименьших привилегий);
// 3. Hardcode secret (Секрет в коде).
$server = getenv("cyb4_db_server");
$login = getenv("cyb4_user_user");
$pwd = trim(getenv("cyb4_db_pwd"));
$conn = mysqli_connect($server,$login,$pwd,"cyb4");
//4. Уязвисмость для SQL Injection
$sql = "INSERT INTO Calcs(Num1, Num2, User) VALUES($x, $y, 'Anonym')";

mysqli_query($conn, $sql);
mysqli_close($conn);


    echo $z;

