<?php include "db2.php";
if(isset($_POST["ok"]))
{
    $n=$_POST["count"];
    
    
    mysqli_query($conn,"INSERT INTO `country`(`cname`) VALUES ('$n')");
    //header("location:adfn.php");
}
?>
<html>
    <head>
    <form action="#" method="post">
    <table>
        
                    
                    <tr>
                    <td>country</td>

                        <td><input type="text" name="count">
                        </td>
                    </tr>
                            <tr><td>
                                    <input type="submit" name="ok">
                                       
                                </td></tr>
                   
                
                
    </table>
    </form>
                
    </head>
</html>
