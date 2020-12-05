<?php 
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php");?>
<head>
<style>
        
input,textarea,select,input[type=number] {
                border: 2px solid;
             border-radius: 4px;
             width: 20%;
           
             
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
    font-size: 15px;
    width:150px;
    left:150px;
}
body{
	background-image: url(images/abcd.jpg);
	background-size:cover;
}

input[type=submit]:hover {
    background-color: #ac2925;
}
    </style>

	<!-- banner -->
	<!-- more -->
		
<?php
	 if(isset($_GET['id']))
	 {
	
		$a=$_GET['id'];
		 
		$c=$_GET['c'];
		
		$n=$_GET['n'];
		
			
		$sql="select * from package where pid='$a'";
		$tbl=getDatas($sql);

	
	
	?>
	<div style="position:relative;left:300px;top:100px;">
<div class="agileinfo_single">
<div style="position:relative;left:60px;top:-50px">
<font color="green">
<?php
				echo "<h1>". $tbl[0][1]."</h1>";
				?></font>
				</div>
    <br>
    <br>
				<div class="col-md-4 agileinfo_single_left" style="position:relative;left:50px;top:-70px;">
				<?php
					echo "<img  width=80%;height=80%; src='".$tbl[0][4]."'  class='img-responsive' />";
					?>
				</div>
				<div class="col-md-8 agileinfo_single_right" style="position:relative;top:-80px;">
					
					<div class="w3agile_description">
						<h4><font color="#d88c22">Package Details :</font></h4><?php
						echo $tbl[0][2];
							?>
					</div>
                    
                    			
                    
                    
					<br>
					
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
						<h4><font color="#d88c22">Price :</font></h4><?php
							echo "<h4>".$tbl[0][3]."</h4>";
							?>
						
						</div>
												
					</div>
                    <br>
                   
                    
                    
                    
                    <div class="snipcart-details agileinfo_single_right_details"style="position:relative;top:-45px;left:160px;background-color:tomato;width:90px;height:60px;padding:15px;border-radius:4px;">
                        <a href="confirm1.php?id=<?php echo $tbl[0][0];?>"><B><font color="white">BOOK NOW</font></B></a>
	
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	 <?php  }?>
		<div class="clearfix"></div>
		<!-- more -->


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