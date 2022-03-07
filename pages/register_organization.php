<html>
   <head>
      <title>Register Organization</title>
   </head>
   
   <body>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
        </tr>
        <?php 
        include "../PHP/config.php";
        $sql = "SELECT orgID, orgName, address from organization";
        $result = $conn-> query($sql);
        if (mysqli_num_rows($result) > 0){
        while ($row= $result-> fetch_assoc()){

            echo "<tr>";
            echo "<td>" . $row['orgID'] . "</td>";          
            echo "<td>" . $row['orgName'] . "</td>";          
            echo "<td>" . $row['address'] . "</td>";          
            echo "</tr>";
        }
            echo"</table>";
        }else{
            echo"no content";
        }
        ?>
    </table>
	
   <div>  
      <div><b>Register Organization Representative</b></div>	
      <div>
               
         <form action="../PHP/register_orgRep.php" method = "post">
            <label>Organization ID  :</label><input type = "text" name = "orgID" class = "box"/><br /><br />
            <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
            <label>Fullname  :</label><input type = "text" name = "fullname" class = "box"/><br /><br />
            <label>Mobile No.  :</label><input type = "text" name = "mobileNo" class = "box"/><br /><br />
            <label>Job Title  :</label><input type = "password" name = "jobtitle" class = "box" /><br/><br />
            <input type = "submit" value = " Submit "/><br />
         </form>
               		
      </div>	
   </div>

   <div>  
      <div><b>Register Organization </b></div>	
      <div>
               
         <form action="../PHP/register_org.php" method = "post">
            <label>Organization Name  :</label><input type = "text" name = "orgName" class = "box"/><br /><br />
            <label>Address  :</label><input type = "text" name = "address" class = "box"/><br /><br />
            <input type = "submit" value = " Submit "/><br />
         </form>
               		
      </div>	
   </div>

   </body>
</html>