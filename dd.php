<?php
include 'db2.php';
?>

<html>
    <head>
    
    </head>
    <body> 
        <form action="#" method="POST">
            <table>
                <tr>
            <td > DISTRICT NAME</td>
                        <td><input type="text"  name="district_name" ></td>
        </tr>
                <div class="form-group">
                                <label for="state">STATE</label>
                                <div class="form-select">

                                    <select  name="statename" id="statename">
                                        <?php
                                        $conn = mysqli_connect("localhost", "root", "", "coun");
                                        if (!$conn) {
                                            echo "Could not connect..Try again";
                                        } else {
                                            $sql = "Select sid, sname from state ";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($sql)) {
                echo '<option value=' . $row['sid'] . '>' . $row['sname'] . '</option>';
            }
                                            echo "<option value =><------Select state------></option>";
                                            while ($row = mysqli_fetch_array($result)) {
                                                $statename = $row['sname'];
                                                $state_id = $row['sid'];
                                                echo "<option value='$statename'>$statename</option>";
                                            }
                                        }
                                        mysqli_close($conn);
                                        ?>
                                    </select>



                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>



                
                <tr>
                    <td></td>
            <td colspan=2>
         <input type="submit" name="submit"  id="submit" value="submit" class="btnRegister"></td>
        </tr>
            </table>
        </form>
    </body>
</html>
<?php
if (isset($_POST['submit']))
    {
    $con = mysqli_connect("localhost", "root", "", "coun");
                                        if (!$conn) {
                                            echo "Could not connect..Try again";
                                        } else {
   // $c_id=$_POST['c_id'];
   $district_name=$_POST['district_name']; 
   $statename=$_POST['statename']; 
   $sql2="Select sid from state where sname='$statename' ";
   $result1 = mysqli_query($con, $sql2);
   while ($row = mysqli_fetch_array($result1)) {
        $state_id = $row['sid'];
   }
   //echo $sname;
   $sql1=mysqli_query($con,"INSERT INTO `district`( `sid`,`dname`) VALUES ('$state_id','$district_name')");
                                        }
  //$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
}
?>




