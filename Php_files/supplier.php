

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>Item registration</title>
  </head> 
    
  <body class="container bg-light">
    <!-- Start Header form -->
    <div class="text-center pt-5">
      <!-- <img src="logo.jpeg" alt="network-logo" width="140" height="140" /> -->
      <h2>REGISTRATION OF YOUR PRODUCT </h2>
    </div>
    <!-- End Header form -->
  
    <!-- Start Card -->
    <div class="card">
      <!-- Start Card Body -->
      <div class="card-body">
        <!-- Start Form -->
        <form id="LoginForm" action="" method="post" class="needs-validation" novalidate autocomplete="off">
          <!-- Start Input Name -->
          <div class="row">
           
            <div class="form-group col-md-4">
            <label for="inputId">Email:</label>
            <input type="text" class="form-control" id="inputid" name="email" placeholder="Your Id" required />
            <small class="form-text text-muted">Please fill the email-Id</small>
          </div> 
          <div class="form-group col-md-4">
            <label for="inputId">Item Id:</label>
            <input type="number" class="form-control" id="inputid" name="email" placeholder="Your Id" required />
            <small class="form-text text-muted">Please fill the email-Id</small>
          </div> 
          
          
            
            <div class="form-group col-md-4">
              <label for="inputbstatus">Country:</label>
              <br> <select id="gen" name="addr">
               <option>Select Country</option>
               <option value="1">India</option>
             </select></div>  
              <!-- <div class="form-group col-md-4">
            
                <label for="inputbstatus">Gender:</label>
               <br> <select id="gen" name="gen">
                <option>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select></div> </div> -->
              
                <div class="form-group col-md-4">
                 
                  <label for="inputbstatus">State:</label>
                  <br> <select id="gen" name="addr">
                   <option>Select State</option>
                   <option value="1">Goa</option>
                   <option value="2">Maharastra</option>
                   <option value="3">Kerala</option>
                   <option value="4">Delhi</option>
                   <option value="5">Hyderabad</option>
                   <option value="Other">Andhra Pradesh</option>
                   <option value="Other">Assam</option>



                 </select></div>
              
                 <div class="form-group col-md-4">
            <label for="inputId">Item name:</label>
            <input type="text" class="form-control" id="inputid" name="email" placeholder="Your Id" required />
            <small class="form-text text-muted">Please fill the email-Id</small>
          </div> 
          <div class="form-group col-md-4">
          <label for="inputId">Price:</label>
          <input type="number" class="form-control" id="inputid" name="email" placeholder="Your Id" required />
          <small class="form-text text-muted">Please fill the price</small>
        </div> 
        <div class="form-group col-md-4">
          <label for="inputId">Please upload the picture of the item:</label>
          <input type="file" class="form-control" id="inputid" name="email" placeholder="Your Id" required />
         
        </div>  
        
        <div class="form-group col-md-4">
          <label for="inputId">Description of your product:</label>
          <input type="txtarea" class="form-control" id="inputid" name="email" placeholder="Write something.." style="height:80px" required />
         
        </div>
                  <div class="container signin">
                    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
                  </div>
                
         <!-- Start Submit Button --><center>
         <button class="visible" class="btn btn-primary btn-block col-lg-2" name="submit" type="submit">Submit</button>
         <!-- End Submit Button --></center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="emp.js"></script>
    <!-- Start Scritp for Form -->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <!-- End Scritp for Form -->
    <footer>
        <center>
        <div class="my-4 text-muted text-center">
          <p>© pragati</p>
        </div></center>
      </footer>
  </body> 
  <?php
include 'connection.php';
if(isset($_POST['submit'])){

$id=$_POST['idid'];
$item_name=$_POST['itnm'];
$Prod_Id=$_POST['pdid'];
$price=$_POST['prc'];

$insertquery="INSERT INTO `items`(`Item_Id`, `Items_name`, `Prod_Id`, `price`) VALUES ('$id','$item_name','$Prod_Id','$price')";
$result=mysqli_query($con,$insertquery); 
if($result){
  ?> 
  <script> 
    alert("data inserted");
  </script>
  <?php 
}
}
?>