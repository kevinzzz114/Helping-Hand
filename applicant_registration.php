<html>
   <head>
      <title>Register Aid Applicant</title>  
   </head>
   
   <body>
	
   <div>  
      <div><b>Register Aid Applicant</b></div>	
      <div>
               
         <form action="../PHP/register_applicant.php" method = "post">
            <label>Fullname  :</label><input type = "text" name = "fullname" class = "box"/><br /><br />
            <label>Income  :</label><input type = "number" name = "income" class = "box"/><br /><br />
            <label>Address  :</label><input type = "text" name = "address" class = "box"/><br /><br />
            <label>Mobile No.  :</label><input type = "number" name = "mobileNo" class = "box"/><br /><br />
            <label>File name  :</label><input type = "text" name = "filename" class = "box" /><br/><br />
            <label>Description of file  :</label><input type = "text" name = "description" class = "box" /><br/><br />
            <input type = "submit" value = " Submit "/><br />
         </form>
               		
      </div>	
   </div>

   <form action="../PHP/logout.php" method="get">
      <button type="submit">Logout</button>
   </form>

   </body>
</html>