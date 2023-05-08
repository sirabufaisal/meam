<?php
include("connect.php");
$sql  =  "insert into answer  values  ( '$_POST[dis_id]',
                                         '$_POST[fname]',
                                         '$_POST[fage]'
                                        )";
mysqli_query($con, $sql);
echo "تم التقديم";
mysqli_close($con);
?>



