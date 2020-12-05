<?php include_once("../shares/db/mydatabase.inc");
include_once("top.php");
  ?>
 <head>
<style>
 table{
                   border: 2px solid #111;
                   border-radius: 1em;
                   width: 80%;
                   margin-left:0px;
                   
               }
               th {
    background-color: #17c3a2;
    color: white;
    height: 40px;
                   text-transform: uppercase;
}
tr{
    height: 30px;
    border-bottom: 1px solid #ddd;
}

    </style>
 </head>
	<!--user--->
	
	

	
										<h1 style="position:relative;left:500px;top:150px;">USER INFORMATION</h1>

				<table border="1" style="position:relative;width:1200px;left:100px;top:180px;">
					<thead>
						<tr>
							<th>User Nme</th>
                            <th>housename</th>
                            <th>City</th>
                            <th>District</th>
                            <th>pincode</th>
                            <th>gender</th>
                            <th>Email</th>
                            <th>mob</th>
                            
				       </tr>
					</thead>
					<?php
					$sql="select * from customerreg";
					$tbl=getDatas($sql);
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr >
						<td><?php echo $tbl[$i][1];?></td>
						<td><?php echo $tbl[$i][2];?></td>
						<td><?php echo $tbl[$i][3];?></td>
						<td><?php echo $tbl[$i][4];?></td>
						<td><?php echo $tbl[$i][5];?></td>
						<td><?php echo $tbl[$i][6];?></td>
						<td><?php echo $tbl[$i][7];?></td>
                        <td><?php echo $tbl[$i][8];?></td>
						
                        
                        <?php 
					}
					?>
					</tbody>
				
				</table>
		
	<!--user-->

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include("footer.php");
?>


