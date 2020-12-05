<?php include_once("../shares/db/mydatabase.inc");?>
 <?php include("top.php"); ?>
 <head>
<style>
 table{
                   border: 2px solid #111;
                   border-radius: 1em;
                   width: 80%;
                   margin-left:0px;
                   
               }
    body{
        
        background-image: url('abc.jpg');
        height: 100%;

  
        
    }
    th {
    background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
    color: orange;
    height: 40px;
    width:70px;
    }
    td {
        background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
        color:whitesmoke;
        }
    tr:hover{
        background-color: aliceblue;
        color: black;
    }
    
               

tr{
    height: 50px;
    border-bottom: 1px solid #ddd;
}

    </style>
 </head>
	<!--user--->
	
	<div class="checkout-right">
										<h1 style="position:relative;left:420px;top:50px;">SERVICE BOOKING INFORMATION</h1>

				<table border="1" style="position:relative;width:900px;left:160px;top:80px;">
					<thead>
						<tr>
                            <th>Booking id</th>
							<th>Customer Name</th>
							<th> Category</th>
							
							<th>Service Name</th>
                            <th>Date</th>
                            <th>Time</th>
                             <th>Cost</th>
                           
							
						
							
						</tr>
					</thead>
					<?php
					$sql="select * from tbl_booking";
					$tbl=getDatas($sql);
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr class="rem1">
						
                        <td class="invert"><?php echo $tbl[$i][0];?></td>
						
						<td class="invert"><?php echo $tbl[$i][1];?></td>
						
						<td class="invert"><?php echo $tbl[$i][3];?></td>
						
						<td class="invert"><?php echo $tbl[$i][4];?></td>
                        <td class="invert"><?php echo $tbl[$i][5];?></td>
                        <td class="invert"><?php echo $tbl[$i][6];?></td>
                        <td class="invert"><?php echo $tbl[$i][7];?></td>
						 
						
				
				
						</tr>
					<?php 
					}
					?>
					</tbody>
				
				</table>
			</div>
	<!--user-->
