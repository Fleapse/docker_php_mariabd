<?php

$sql = mysqli_connect('mariadb', 'root', 'root','test_base');
$sqli = 'SELECT * FROM `test` WHERE `id`=1';
$res = $sql->query($sqli);



for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo " name = " . $row['name'] . "\n";
}
?>
