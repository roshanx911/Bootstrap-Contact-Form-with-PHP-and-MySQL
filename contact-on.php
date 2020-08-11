<?php
	$contact_name=$_POST["contact_name"];
	$contact_email=$_POST["contact_email"];
	$contact_message=$_POST["contact_message"];
					
	$con=mysqli_connect("localhost","root") or die ("<div class=\"row\"><div class=\"span2\"></div>
					 <div class=\"span3 offset\"><div class=\"alert-block\">
					 <a href=\"\" class=\"close\" data-dismiss=\"alert\">&times;</a>
					 <strong>Error !</strong> Server Can't Access !
					 </div></div></div>");  
	$db=mysqli_select_db($con,"dbnew") or die ("<div class=\"row\"><div class=\"span2\"></div>
					 <div class=\"span3 offset\"><div class=\"alert-block\">
					 <a href=\"\" class=\"close\" data-dismiss=\"alert\">&times;</a>
					 <strong>Error !</strong> Database Can't Access !
					 </div></div></div>"); 					
	$sql="INSERT INTO contact(name,email,message)VALUES('$contact_name','$contact_email','$contact_message')";
	$query=mysqli_query($con,$sql) or die ("<div class=\"row\"><div class=\"span3 offset\"><div class=\"alert-block\">
									<a href=\"\" class=\"close\" data-dismiss=\"alert\">&times;</a>				 
									<strong>Error !</strong> Check SQL Statement !
									</div></div></div>");

		if($query>0)
		{			
	        echo ("<div class=\"row\"><div class=\"span3 offset\"><div class=\"alert-block\">
			     <a href=\"\" class=\"close\" data-dismiss=\"alert\">&times;</a>
			     <strong>Success !</strong> Message Request Complete !
			     </div></div></div>");			
		}
	  		
		else
		{
	        echo ("<div class=\"row\"><div class=\"span3 offset\"><div class=\"alert-block\">
			     <a href=\"\" class=\"close\" data-dismiss=\"alert\">&times;</a>
				 <strong>Error !</strong> Request Cannot Send ! No Database Connectivity !
				 </div></div></div>");
		}		
	mysqli_close($con);			
?> 
