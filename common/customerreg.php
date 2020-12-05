<?php include_once("../shares/db/mydatabase.inc"); ?>

<?php
include("top.php");
?>

<html>
<head>
<script src="maha.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<style>
* {
    box-sizing: border-box;
}

input[type=text],input[type=email],input[type=date] ,input[type=password],select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
body{
  background-image: url(assets/images/b5.jpg);
  background-size: cover;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
    font-weight: bold;
    text-transform: uppercase;

}

input[type=submit] ,input[type=reset]{
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    float: right;
}

input[type=submit],input[type=reset]:hover {
    background-color: #45a049;
}

.container2 {
    border-radius: 2px;
    background-color:  #ffffff00;
    padding: 20px;
    width: 50%
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 60px) {
    .col-25, .col-75, input[type=submit],input[type=reset] {
        width: 75%;
        margin-top: 0;
    }
}
</style>
</head>


<?php
$sql="select ifnull(max(cid),0)+1 from customerreg";
$tbl=getDatas($sql);
?>
    <body>
	
        <h1 style="position:relative;left:420px;top:30px;"><font color="white"> CUSTOMER REGISTRATION</font></h1>
        <form action="" method="post">
            <div class="container2" style="position:relative;top:50px;left:250px;">
			<div id="err" style="color: red;height: 20px"></div>

                <div class="row">
                    <div class="col-25">
                        <label>CUSTOMER ID</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="tid" value="<?php echo $tbl[0][0]; ?>">
                    </div>
                    </div>
                <div class="row">
                    <div class="col-25">
                        <label>CUSTOMER NAME</label>
                        
                    </div>
					<div class="col-75">
                        <input type="text" name="name" id="name">
                       <p id="p0"></p>
                 <script>
                 $("#name").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z ]{3,50}$') ) {
       $('#p0').hide();
    } else {
         $('#p0').show();
       $('#p0').text("* please enter a valid  name *"); 
         $('#name').focus(); 
    }
  
});
    </script>  
                    </div>
                </div>
					<div class="row">
                    <div class="col-25">
                        <label>House Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="housename" id="hname" required>
                        
                         <p id="p10"></p>
                 <script>
                 $("#hname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z ]{3,50}$') ) {
       $('#p10').hide();
    } else {
         $('#p10').show();
       $('#p10').text("* please enter a valid  name *"); 
         $('#hname').focus(); 
    }
  
});
    </script>
                        
                        
                        
                    </div>
                </div>
                    <div class="row">
                    <div class="col-25">
                        <label>City</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="city"  required="">
                    </div>
                    </div>
            
            
            
                <div class="row">
                    <div class="col-25">
                        <label>District</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="district" required="">
                    </div>
                </div>
            
          
            
               <div class="row">
                    <div class="col-25">
                        <label>Pincode</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="pincode" id="pincode"  inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
																		  placeholder="" pattern="^\d{6}$" title="Incorrect Pincode" required>
                       
                       
                   
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            
            
            
            
                <div class="row">
                    <div class="col-25">
                        <label>GENDER</label>
                        
                    </div>
                      <div class="col-75">
                       <select name="radio">
                            <option value="">--Choose Your Gender---</option>
                            <option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Other">Other</option>
                          
							
                        </select>
                    </div>
                </div>
                
                
                
                
                
                
            
                
                
                
                
                
                
                
                
                
                
                
                
              
                <div class="row">
                    <div class="col-25">
                        <label>EMAIL_ID</label>
                    </div>
                    <div class="col-75">
                        <input id="email" type="email" name="email" class="form-control customize"  required="required" data-error="Valid email is required."   required/>
                        
                         <p id="p8"></p>
       <script>
                 $("#email").on("blur", function() {
    if ( $(this).val().match('^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z0-9]{2,4})+$') ) {
       $('#p8').hide();
    } else {
         $('#p8').show();
       $('#p8').text("*  Please enter valid email  *");
        $("#email").focus();
        
    }
});
    </script>  <div class="help-block with-errors"></div>
                    </div>
                </div>
				
				<div class="row">
                    <div class="col-25">
                        <label>
                            PHONE_NO</label>
                    </div>
                    <div class="col-75">
                        <input id="phone" type="text" name="phone"   onchange="Validatep()"; required/>
                        
                        <label class="errormob" style="display:none; color:black" id="mobile_1"></label>
                        
                         <script>
                                              function Validatep()
                                              {
                                                  var val = document.getElementById('phone').value;
                                                //  var user_phn =/^(?!(\d)\1{9})(?!0123456789|1234567890|0987654321)\d{10}$/ ;

                                                  if (!val.match(/^(?!(\d)\1{9})(?!0123456789|1234567890|0987654321|0000000000|1111111111|22222222222|3333333333|4444444444|5555555555|6666666666|7777777777|8888888888|9999999999|1000000000|2000000000|3000000000|40000000000|5000000000|6000000000|6777777777|7666666666|6888888888|6999999999|7888888888|7999999999|8666666666|8777777777|8999999999|9666666666|9777777777|9888888888|7000000000|8000000000|9000000000)\d{10}$/))
                                                  {
                                                  $("#mobile_1").html('Invalid Phone number..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('phone').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
                                              </script>  
                                        <div class="help-block with-errors"></div>
                        
                    </div>
                </div>
				
				
                <div class="row">
                    <div class="col-25">
                        <label> PASSWORD</label>
                  
                    </div>
                    <div class="col-75">
                        <input type="password" name="password" id="pwd" placeholder="Password" required onblur="Validatepass()";>
                        <label class="errortext" style="display:nne; color:red" id="psw_2"></label><br>
                                               <script>
                                              function Validatepass()
                                              {
                                                   var password = document.getElementById('pwd');
                                                     var filter = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
                                                     if (!filter.test(password.value)) {
                                                      password.value="";
                                                      $("#psw_2").html('Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters ').fadeIn().delay(4000).fadeOut();
                                                       document.getElementById('pwd').style.border="1px solid red"; 
                                                      return false;
                                                      }

                                                      else
                                                      {

                                                         document.getElementById('pwd').style.border="1px solid green"; return true;
                                                      }
                                                  
                                              }

                                              </script>
                                 
                        
                    </div>
                </div>
                     <div class="row">
                    <div class="col-25">
                        <label>CONFIRM PASSWORD</label>
                  
                    </div>
                    <div class="col-75">
                        <input id="confirmpassword" type="password" name="confirmpassword" class="form-control customize"  onblur="return Validate()";   required/>
                        
                        <script type="text/javascript">
 function Validate() {
        var password = document.getElementById("pwd").value;
        var confirmPassword = document.getElementById("confirmpassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
             document.getElementById("confirmpassword").value="";
            password.focus();
           
        }
        return true;
    }
</script>
                    </div>
                </div>
                
               
                
					 
					 
               
                
                <div class="row">
                        <div  style="position:relative;right:-300px; top:10px">                         
                        <input type="reset" name="reset" value="Cancel">
                        </div>                        
                        <div  style="position:relative;right:-350px; top:10px">                         
                         <input type="submit" name="submit" value="Register"> 
                        </div>
                        </div>
            </div>
        </form>
    </body>
</html>


<?php
if(isset($_POST['tid']))
{
$a=$_POST['tid'];
echo $a;
$b=$_POST['name'];
echo $b;
$c=$_POST['housename'];
$d=$_POST['city'];
$e=$_POST['district'];
$f=$_POST['pincode'];
    $g=$_POST['radio'];
    $h=$_POST['email'];
        $i=$_POST['phone'];
        $j=$_POST['password'];
   date_default_timezone_set('Asia/Calcutta'); 
$date=date("Y/m/d");
	
    
    
	$sql="select * from login where username='$h'";	
	$tbl=getDatas($sql);
    $em1=$tbl[0][0];
    if($em1=='')
    {	
    
    
    
$sql="insert into customerreg values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$date')";
setDatas($sql);

$sql="insert into login values('$h','$j','user',0)";
setDatas($sql);
msgbox('Successfully Registered');
    nextpage("home.php");
    }
    else
    {
        msgbox("email alredy exist");
    }
    
	}

else
{

}

?>

<br><br><br><br>
<?php

include("footer.php");
?>

