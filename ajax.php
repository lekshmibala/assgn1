<?php
include 'db2.php';
?>
<?php
$country = $_GET["country"];



if ($country != "") {
    $res = mysqli_query($conn, "select * from state where id=$country");

    echo"<select id='sname'  name='sname' onChange='change_state()'>";
    while ($row = mysqli_fetch_array($res)) {
        echo"<option value='$row[sid]'>";
        echo $row['sname'];
        echo"</option>";
    }
    echo"</select>";
}
?>
