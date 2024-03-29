<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background-repeat:no-repeat;
    background-size:cover;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
 background-color:rgb(37, 116, 161);
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
 background-color: #45a049
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body background="bg1.jpg">
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>TO PLACE AN ORDER</h3>
            <label for="fname"><i class="fa fa-user"></i> Customer ID</label>
            <input type="number" id="fname" name="id" placeholder="Customer id">
            <label for="email"><i class="AMT"></i>Amount</label>
            <input type="number" id="email" name="amt" placeholder="Amount">
            <label for="adr"><i class="fa fa-address-card-o"></i> Payment Date:</label>
            <input type="date" id="adr" name="date" placeholder="Address">
            <label for="fname"><i class="Trans-id"></i> transaction ID</label>
            <input type="text" id="fname" name="ID" placeholder="transaction id">
            
          </div>
        </div>

            <div class="row">
              
              
            
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Card Holder Name">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Credit Card Number">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Expiry date">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="Expiry Year">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Place An order" class="btn" name="submit">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart </h4>
      <table><tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>SubTotal</th></tr>
        <tr>
          <td>Product name</td>
          <td><input type="number" value="1"></td>
          <td>Rs.200</td>
        </tr>
        <td>
          <div class="cart-info">
            <img src="Long-Island-Cheese-Pumpkins.jpg" heigth="150px" width="150px" alt="">
            <div>
              <p>Pumpkin</p>
              <small>Price:Rs.200</small>
            </div>
          </div>
        </td>
      </table>
    </div>
  </div>
</div>

</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['submit'])){

$id=$_POST['id'];
$amt=$_POST['amt'];
$pay_dt=$_POST['date'];
$trans_id=$_POST['ID'];

$insertquery="INSERT INTO `payment`(`Transaction_Id`, `Amount`, `Payment_Date`, `Customer_Id`) VALUES ('$trans_id','$amt','$pay_dt','$id')";
$result=mysqli_query($con,$insertquery); 
if($result){
  ?> 
  <script> 
    alert("data not inserted");
  </script>
  <?php 
}
}?>