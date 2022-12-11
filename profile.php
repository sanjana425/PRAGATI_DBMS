<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
 background-repeat:no-repeat;
    background-size:cover;

}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] ,input[type=number]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color:rgb(37, 116, 161);
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
background-color: #45a049
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body background="background.jpg">

<form action="" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    
    <label><b> FNAME : </b> </label>   
<input type="text" name="name" placeholder= "name"  /> 

<br>
<label><b> LNAME : </b> </label>   
<input type="text" name="name" placeholder= "name"  /> 

<br>
<label><b>Producer ID:</b></label>     
<input type="number" name="ID" placeholder="ID." />
<br>
<label><b>PHONE :</b></label> 
<input type="number" name="phone" placeholder="Phone no." /> 
    <br>
  <label><b>VILLAGE NAME : </b> </label>   
<input type="text" name="vname" placeholder= "Village name"  />
<label><b>COUNTRY : </b> </label>   
<input type="text" name="addr" placeholder= "Country"  />
<label><b>STATE: </b> </label>   
<input type="text" name="addr" placeholder= "State"  />
<label><b>Panchayat name(if attended any programme):</b></label>     
<input type="text" name="pnm" placeholder="panchayat name" />
<br>
  <div class="container signin">
    <p>Already have an account? <a href="login.html">Sign in</a>.</p>
  </div>

<button type="submit" class="registerbtn" name="submit"><a href="supplier.php" class="remove">Register</a></button></div>
</form>

</body>

</html>
<?php
include 'connection.php';
if(isset($_POST['submit'])){

$id=$_POST['ID'];
$fname=$_POST['name'];
$lname=$_POST['name'];
$plocation=$_POST['vname'];
$email=$_POST['email']; 
$phone=$_POST['phone'];
$country=$_POST['addr'];
$state=$_POST['addr'];
$pname=$_POST['pnm']; 
$password=$_POST['psw'];
$repass=$_POST['psw-repeat'];
$insertquery="INSERT INTO `producer`(`Id`, `fname`, `lname`, `Plocation`, `p_email`, `phone`, `country`, `state`, `panchayat_nm`) VALUES ('$id','$fname','$lname','$plocation','$email','$phone','$country','$state','$pname')";
$result=mysqli_query($con,$insertquery); 
if($result){
  ?> 
  <script> 
    alert("data not inserted");
  </script>
  <?php 
}
}?>