<?php include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php") ?>
<head>

<style>
 table{
                   border: 2px solid #111;
                   border-radius: 4px;
                   width:1200px;
                   margin-left:0px;
                   
               }
               th {
    background-color: #b22010;
    color: white;
    height: 40px;
}
tr{
    height: 30px;
    border-bottom: 1px solid #ddd;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  border-radius:4px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.aa:link, .aa:visited {
  background-color: #f44336;
  color: white;
  padding: 20px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.aa:hover, .aa:active {
  background-color: red;
}
.aaa{
            border: 1px solid #123b6d;
            border-radius: 4px;
            background-color: appworkspace;
            padding: 20px;
        }
        .aaa:hover{
            background-color: antiquewhite;
        }
.container2 {
    border-radius: 2px;
    background-color:  #ccc;
    padding: 20px;
    width: 50%
}
    </style>
 </head>
 <a href="staffview.php" class="aaa" style="position:relative;top:30px;left:1200px;color:red;"><b>New USER</b></a> 

	<!--user--->
	<?php
	$d = date("M-d-Y");
	echo "<div style='position:relative;top:250px;left:950px;'><font color='black'>Date:$d</font></div>";
	$t=date("h:i:sa");
	echo "<div style='position:relative;top:260px;left:950px;'><font color='black'>Time:$t</font></div>";
	
	$sql="select *,login.status from customerreg join login where login.status='1' and login.username=customerreg.email";
					$tbl=getDatas($sql);
					if($tbl==null){
	echo "<div style='position:relative;top:250px;left:620px;'><font color='red'>No Approved Staff...</font></div>";
}
else{
?>



    <h1 style="position:relative;left:550px;top:50px;"> USER DETAILS</h1>
	<div class="checkout-right">
					
				<table border style="position:relative;width:900px;top:70px;left:200px">
					<thead>
						<tr>
								
							<th> Name</th>
							<th>House Name</th>
							
							<th>City</th>
							<th>District</th>
							<th>Email</th>
							<th>Phone</th>
					
							
							
							
						</tr>
					</thead>
					<?php
					
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr class="rem1">
						
						<td class="invert"><?php echo $tbl[$i][1];?></td>
						<td class="invert"><?php echo $tbl[$i][2];?>
							 
						</td>

						<td class="invert"><?php echo $tbl[$i][3];?>
							 
						</td>
						<td class="invert"><?php echo $tbl[$i][4];?></td>
						<td class="invert"><?php echo $tbl[$i][7];?>
							
					</td>
					<td class="invert"><?php echo $tbl[$i][8];?>
							
					</td>
					
						
					<?php 
					}
					}
					?>
					</tbody>
				
				</table>
			
			</div>
	<!--user-->
	
