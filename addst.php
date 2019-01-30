<?php
include 'db2.php';
//$s=$_GET["id"];
?>
<html>
    <body>
        <form action="#" method="post">
            <table>
                <tr>
                    <td>
                        Country
                    </td><td><select name="cnme">
                        
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "coun");
                                        if (!$conn) {
                                            echo "Could not connect..Try again";
                                        } else {
                        
                                            $sq="select id,cname from country";
                        $res=mysqli_query($conn,$sq);
                       
                        
                        while($row=mysqli_fetch_array($sq)){
                            echo '<option value='.$row['id'].'>'. $row['cname'].'</option>';
                        }
                        echo "<option value =><------Select Country------></option>";
                                            while ($row = mysqli_fetch_array($res)) {
                                                $cname = $row['cname'];
                                                $cid = $row['id'];
                                                echo "<option value='$cname'>$cname</option>";
                                            }
                                        }
                                        mysqli_close($conn);
                                        ?>
                        
                        </select> </td>
                </tr>
                <tr>
                    <td>state name<input type="text" name="snme"></td>
                </tr>
                <tr>
                    <td><input id="submit" type="submit" name="submit" ></td>
                    
                </tr>
               
            </table>
         </form>
            
    </body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $conn= mysqli_connect("localhost","root","","coun");
    if (!$conn) {
                                            echo "Could not connect..Try again";
                                        } else {
    //$x=$_POST["id"];
    $cn=$_POST["cnme"];
    $snme=$_POST["snme"];
   $sql2="Select id from country where cname='$cn'";
   $result1 = mysqli_query($conn, $sql2);
   while ($row = mysqli_fetch_array($result1)) {
        $x = $row['id'];
   } 
   
    
            $qr=mysqli_query($conn,"INSERT INTO `state`(`id`,`sname`) VALUES ('$x','$snme')");
}
}
?>