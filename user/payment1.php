
<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc"); 
?>
<?php include("top.php");?>
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

.container2 {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text],input[type=password],select {
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
  background-color: #4CAF50;
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
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}
body{
        background:url(p60.jpg) no-repeat top fixed ;
        background-size:cover;
        
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
<body>
<?php 

$id=$_GET['a'];

	$pr=$_GET['b'];

?>
    
<div class="row" style="position:relative;width:600px;left:450px;top:30px;">
  <div class="col-75">
    <div class="container2">
      <form action="" method="post">
      
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
              <label for="cname">Amount TO Pay</label>
            <input type="text" id="cname" name="amount" value="<?php echo $pr;?>" readonly>
               <input type="text" id="cname" name="id" hidden value="<?php echo $id;?>">
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" id="pincode1"  inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
																		  placeholder="" pattern="^\d{16}$" title="Incorrect Pincode" required>
            <label for="expmonth">Exp Month</label>
            <select id="expmonth" name="expmonth">
              
              <option value=''>--Select Month--</option>
    <option selected value='1'>January</option>
    <option value='2'>February</option>
    <option value='3'>March</option>
    <option value='4'>April</option>
    <option value='5'>May</option>
    <option value='6'>June</option>
    <option value='7'>July</option>
    <option value='8'>August</option>
    <option value='9'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>
    </select> 
              
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <select id="expyear" name="expyear" >
                     <option value="16">2019</option>
                    <option value="17"> 2020</option>
                    <option value="18"> 2021</option>
                    <option value="19"> 2022</option>
                    <option value="20"> 2023</option>
                    <option value="21"> 2024</option>
                     <option value="22">2025</option>
                    <option value="23"> 2026</option>
                    <option value="24"> 2027</option>
                    <option value="25"> 2028</option>
                    <option value="26"> 2029</option>
                    <option value="27"> 2030</option>
                     <option value="28">2031</option>
                    <option value="29"> 2032</option>
                    <option value="30"> 2033</option>
                    <option value="31"> 2034</option>
                    <option value="32"> 2035</option>
                    <option value="33"> 2036</option>
                     <option value="34">2037</option>
                    <option value="35"> 2038</option>
                    <option value="36"> 2039</option>
                    <option value="37"> 2040</option>
                    <option value="38"> 2041</option>
                    <option value="39"> 2042</option>
                    <option value="40"> 2043</option>
                </select>
               
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" placeholder="" id="pincode"  inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
																		  placeholder="" pattern="^\d{3}$" title="Incorrect Pincode" required>
              </div>
            </div>
          </div>
          
        </div>
       
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  
</div>

</body>
</html>
<?php
if(isset($_POST['amount'])){
    $a=$_POST['amount'];
    $pyid=$_POST['id'];
   echo $pyid;
    $sql="update package2 set status='paid' where bid='$pyid'";
   setDatas($sql);
    msgbox('Payment Successfull');
    nextpage('home.php');
    
}

?>
