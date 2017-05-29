<?php
 $con=mysqli_connect("localhost", "root", "","test")or die(mysql_error()); 
 mysqli_select_db($con,"test")or die(mysql_error());
 if(isset($_POST['add']))
{
    $Roll=$_POST['Roll'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
 	$email=$_POST['email'];
 
 mysqli_query ($con,"INSERT INTO class (Roll,Name, email, phone_num) VALUES ('$Roll','$name', '$email', '$phone')");
        echo "<script>window.open('hom.php','_self')</script>";
}
?>
<!DOCTYPE html>
    <head>
        <title>Addressbook</title>
    </head>
 <body> 
 <nav class="navbar navbar-default">
    <div class="topnav">
 <nav class="navbar navbar-default">
    <div class="navbar-header" >

  <div>
                            <form  action="edt.php" method="post" > 
                                <h1> Add Info</h1>
                               
                                <p> 
                                    <label>Country_ID </label>
                                    <input name="Roll" required="required" type="Roll" placeholder="Enter ID"/>
                                </p>
                                <p> 
                                    <label>Country_Name </label>
                                    <input name="name" required="required" type="name" placeholder="Enter country name"/>
                                </p>
                                 <p> 
                                    <label>Capital </label>
                                    <input name="phone" required="required" type="phone" placeholder="Enter capital name"/>
                                </p>
                                <p> 
                                    <label>Language </label>
                                    <input name="email" required="required" type="name" placeholder="Enter language name"/>
                                </p>
                                <p class="signin button"> 
                                    <input type="submit" name="add" value="add new"/> 
                                </p>
                            </form>
    </div>  
        </div>  
    </nav>  
    
 </body> 
 </html> 