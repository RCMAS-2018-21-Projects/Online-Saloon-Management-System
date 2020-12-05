<?php include_once("../shares/db/mydatabase.inc");?>
 <?php include("top.php"); ?>
 <head>
<style>
 table{
                   border: 2px solid #111;
                   border-radius: 1em;
                   width: 80%;
                   margin-left:0px;
                   
               }body{
        background:url(abc.jpg) no-repeat top fixed ;
        background-size:cover;
        
    }
               th {
    background-color: #17c3a2;
    color: white;
    height: 40px;
}
tr{
    height: 30px;
    border-bottom: 1px solid #ddd;
}

    </style>
 </head>
	<!--user--->
	
	<div class="checkout-right">
										<h1 style="position:relative;left:420px;top:120px;">SERVICE INFORMATION</h1>

				<table border="1" style="position:relative;width:900px;left:160px;top:150px;">
					<thead>
						<tr>
							<th>Category</th>
							<th> Sub Category</th>
							
							<th>Service Name</th>
                            <th>Cost</th>
                            
                           
							
						
							
						</tr>
					</thead>
					<?php
					$sql="select * from addservice";
					$tbl=getDatas($sql);
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr class="rem1">
						
                        
						<td class="invert"><?php echo $tbl[$i][1];?></td>
						
						<td class="invert"><?php echo $tbl[$i][2];?></td>
						
						<td class="invert"><?php echo $tbl[$i][3];?></td>
						<td class="invert"><?php echo $tbl[$i][5];?>
						
						</td>
				
						</tr>
					<?php 
					}
					?>
					</tbody>
				
				</table>
			</div>
	<!--user-->
