<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php");?>
<head>
<style>
       
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
           
             
            }
            label{
                color: green;
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
$sql="select * from staffreg where email='$user'";
$tbl=getDatas($sql);

for($i=0;$i<count($tbl);$i++)
		{
			
			for($j=0;$j<count($tbl[$i]);$j++)
			{
			
			}
		
?>

<div class="w3_login">
    <h3 style="position: relative;top:50px;left:620px;"><font color="blue">My Profile</font> </h3>
			
        <form action="" method="post" >
            <table style="position: relative;left:480px;top:80px">
                <tr>
                    <td>
                        <label> User Name</label>
                    </td>
                    <td>
                        <?php echo $tbl[$i][1];?>
                      </td>
                </tr>
           <tr><td></td></tr>
                 
                
               <tr>
                    <td>
                        <label> Gender:</label>
                    </td>
                    <td>
                          <?php echo $tbl[$i][6];?>
                      </td>
                </tr>
               
                <tr><td></td><td>
                 <tr>
                    <td>
                        <label>Phone Number:</label>
                    </td>
                    <td>
                          <?php echo $tbl[$i][8];?>
                      </td>
                </tr> <tr><td></td></tr>
				<tr>
                    <td>
                        <label> Email:</label>
                    </td>
                    <td>
                          <?php echo $tbl[$i][7];?>
                      </td>
                </tr>
               
                <tr><td></td><td>
                 <tr>
                    <td>
                        <label> Address:</label>
                    </td>
                    <td>
                          <?php echo $tbl[$i][2];?>
                      </td>
                </tr>
				<tr><td></td><td>
                 <tr>
                    <td>
                        <label> Pin:</label>
                    </td>
                    <td>
                          <?php echo $tbl[$i][5];?>
                      </td>
                </tr>
               <tr><td></td><td></td></tr>
			    <tr><td></td><td></td></tr>
			   
                <tr><td><center>  
			    <h2><a class="ab" href="edit.php"><font color="red">EDIT</font></a></h2></center> 
                       </td></tr>
                    
                    
                    
                    	   
            
            </table>
            
            
        </form>
                                   </div>
        <div class="clearfix"></div>
		

<?php
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
    
    
    
    <?php
    
    include("footer.php");
    ?>
    
    