<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php");?>
<head>
<script src="maha.js"></script>
<style>
       
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
           
             
            }
            label{
                color: blue;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 200px;
            }
            .div1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: auto;
   padding: 30px;
    width:50%;
}
body{ 
        background:url(images/p87.jpg) no-repeat top fixed ;
        background-size:cover;
        
    }
input[type=submit] {
    background-color: tomato;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    width:100px;
}

input[type=submit]:hover {
    background-color: #ac2925;
}
</style>
</head>

<?php
$sql="select * from customerreg where email='$user'";
$tbl=getDatas($sql);

for($i=0;$i<count($tbl);$i++)
		{
			
			for($j=0;$j<count($tbl[$i]);$j++)
			{
			
			}
		
?>
<div class="w3_login">
    <h3 style="position: relative;top:50px;left:620px;color:blue;">EDIT PROFILE </h3>
			
        <form action="" method="post" >
            <table style="position: relative;left:500px;top:80px">
			<div id="err" style="color: red;height: 20px"></div>

                <tr>
                    <td>
                        <label> Email</label>
                    </td>
                     <td>
                        <label> :</label>
                    </td>
                    <td>
                       <input type="email" name="name" value="<?php echo $tbl[$i][7];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr>
                 
                 
                 
                 <tr>
                    <td>
                        <label>Phone Number</label>
                    </td>
                     <td>
                        <label>:</label>
                    </td>
                    <td>
                          <input type="text" id="phone" name="phn" value="<?php echo $tbl[$i][8];?>" onchange="Validatep()"; required/>
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
                      </td>
                </tr> <tr><td></td></tr>
                 <tr>
                    <td>
                        <label> Housename</label>
                    </td><td>
                        <label>:</label>
                    </td>
                    <td>
                          <input type="text" name="address" value="<?php echo $tbl[$i][2];?>"/>
                      </td>
                </tr>
                </tr> <tr><td></td></tr>
                 <tr>
                    <td>
                        <label> Pincode</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                          <input type="text" id="pincode" name="pin" value="<?php echo $tbl[$i][5];?>"inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
                                                                          placeholder="" pattern="^\d{6}$" title="Incorrect Pincode" required>
                      </td>
                </tr>
               
                <tr><td></td><td>
				<input type="submit" value="UPDATE"/>
                        </td></tr>
            </table>
            
            
        </form>
                                   </div>
        <div class="clearfix"></div>
		

<?php
		}
		
		if(isset($_POST['name'])){
		
		$a=$_POST['name'];
		
		$c=$_POST['phn'];
		$d=$_POST['address'];
				$b=$_POST['pin'];

		
		$sql="update customerreg set name='$a',phone='$c',housename='$d',pincode='$b' where email='$user'";
		setDatas($sql);
		msgbox("updated");
            nextpage("home.php");
		}
		
		?>
		<!-- Bootstrap Core JavaScript -->
<script src="../temp/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="../temp/js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>



   <br><br><br><br>
    
    

