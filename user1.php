




<?php
include 'db2.php';
$r=$_GET["did"];
?>
<html>
    <body>
        <form action="#" method="post">
            <table border="1">
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="unme"></td>
                </tr>
                <tr>
                	<th>Select Country</th>
                    <td><select id="cname" name="cname" onChange="change_country()">
                    		<option>--Select Country--</option>
                            <?php
								$res=mysqli_query($conn,"select * from country");
								while($row=mysqli_fetch_array($res))
								{
									
							?>
                            
            				<option value="<?php echo $row["id"];?>"><?php echo $row["cname"]; ?></option>
                            <?php
								}
							?>
                            </select>
                     </td>
                 </tr>
                <tr>
                 	<th>Select State</th>
                    <td>
                    	<div id="state">
                    	<select id="sname" name="sname">
                        	<option> --Select State--</option>
                         </select>
                         </div>
                    </td>
                  </tr>
                  <tr>
                 	<th>Select District</th>
                    <td>
                    	<div id="district">
                    	<select id="dname" name="dname">
                        	<option> --Select District--</option>
                         </select>
                         </div>
                    </td>
                  </tr>
              </table>    
        
            <input type="submit" name="submit">
             </form>
    
            <script type="text/javascript">
			function change_country()
			{
					var xmlhttp=new XMLHttpRequest();
					xmlhttp.open("GET","ajax.php?country=" + document.getElementById("cname").value,false);
					xmlhttp.send(null);
					document.getElementById("state").innerHTML=xmlhttp.responseText;
			}
			function change_state()
			{
					var xmlhttp=new XMLHttpRequest();
					xmlhttp.open("GET","aja.php?state=" + document.getElementById("sname").value,false);
					xmlhttp.send(null);
					document.getElementById("district").innerHTML=xmlhttp.responseText;
					
			}
		</script>
    </body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['unme'];
		$country=$_POST['cname'];
		$state=$_POST['sname'];
		$dis=$_POST['dname'];
		mysqli_query($conn,"INSERT INTO `user`(`did`,`uname`, `country`, `state`, `district`) VALUES ('".$r."',".$name."','".$country."','".$state."','".$dis."')");
		
		//mysqli_query($con,"insert into emp('name','country','state','city') values ('".$name."','".$country."','".$state."','".$dis."')");
	}

?>

            
       
