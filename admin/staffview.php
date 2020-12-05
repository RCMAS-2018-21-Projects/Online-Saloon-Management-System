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

    </style>
 </head>
	<!--user--->
	<?php
	$msg = "";
	if(isset($_GET['a'])){
		$a = $_GET['a'];
		$mode = $_GET['mode'];
		if($mode=="app"){
			$sql = "update login set status='0' where username='$a'";
		
		}else{
			$sql = "update login set status='1' where username='$a'";
		}
		setDatas($sql);
         msgbox('success');
		$msg = mysql_error();
		if(!isset($msg) || $msg==''){
			$msg = "Success !!!";
		}
	}
?>
<?php
	$sql="select *,login.status from customerreg join login where login.status='0' and login.username=customerreg.email";
					$tbl=getDatas($sql);
					if($tbl==null){
	echo "<div style='position:relative;top:250px;left:620px;'><font color='red'>No New USER Registration...</font></div>";
}
else{
?>
<img src="indane.png"  style="position:relative;top:20px;left:460px;height:150px;">
    <h1 style="position:relative;left:550px;top:125px;"> User View</h1>
	<div class="checkout-right">
					
				<table border style="position:relative;width:900px;top:140px;left:200px">
					<thead>
						<tr>
								
								
							<th> Name</th>
							<th>House Name</th>
							
							<th>City</th>
							<th>District</th>
							<th>Email</th>
							<th>Phone</th>
							
							<th colspan=2>Approval</th>
							
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
					
						<td class="invert"> <a href="?a=<?php echo $tbl[$i][7];?>& mode=app">Approve</a></td>
				<td class="invert"> <a href="?a=<?php echo $tbl[$i][7];?>& mode=rej">Reject</a></td></tr>
					<?php 
					}
					}
					?>
					</tbody>
				
				</table>
			</div>
	<!--user-->
	
