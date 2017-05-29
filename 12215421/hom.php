<html>
 	<head>
 		<title>Class info</title>
 	</head>
 	<body>
 	 <nav class="navbar navbar-default">
    <div class="topnav">
    <div style= margin:20px;><a href="edt.php"target="_blank">Edit</a>
    </div>
 <nav class="navbar navbar-default">
    <div class="navbar-header">
 
 	<?php
 $con=mysqli_connect("localhost", "root", "","test")or die(mysql_error()); 
 mysqli_select_db($con,"test")or die(mysql_error());

 
	if(isset($_GET['id'])){	
$id= $_GET['id'];
 mysqli_query ($con,"DELETE FROM class where Student_ID=$id");
 Print "Entry has been removed <p>";
}//else
//$id="";
  $data = mysqli_query($con,"SELECT * FROM class ORDER BY Student_ID ASC") 
 or die(mysql_error()); 
 Print "<h2>Class info</h2><p>"; 
 Print "<table border cellpadding=3>"; 
 Print "<tr><th width=100>Student_ID</th><th width=100>Name</th><th width=200>Email</th><th width=150>Phone number</th></tr>";  
 while($info = mysqli_fetch_array( $data )) 
 { 
 Print "<tr><td>".$info['Roll'] . "</td> "; 
 Print "<td>".$info['Name'] . "</td> "; 
 Print "<td>" .$info['email'] . "</a></td>";
 Print "<td>".$info['phone_num'] . "</td>";
 Print "<td><a href=".$_SERVER['PHP_SELF']."?id=".$info['Roll'].">Delete</a>";
 } 
 Print "</table>";  
   ?>

</div>  
    </nav> 
 	</body> 
 </html> 
