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
        
        background-image: url('abc.jpg');
        height: 100%;

  
        
    }
    th {
    background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
    color: orange;
    height: 40px;
    width: 70px;
    text-align: center;
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
    text-align: center;
}


    </style>
 </head>
	<!--user--->
	
	<div class="checkout-right">
										<h1 style="position:relative;left:420px;top:50px;">FEEDBACK
										</h1>

				<table border="1" style="position:relative;width:900px;left:160px;top:90px;">
					<thead>
						<tr>
							<th>Feedback ID</th><th>email-id</th>
							<th> Feedback</th>
							
							
                          
                           
							
						
							
						</tr>
					</thead>
					<?php
					$sql="select * from feedback";
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
						
						<td class="invert"><?php echo $tbl[$i][2];?></td>
						
				
                  
						 
						
						</td>
				
						</tr>
					<?php 
					}
					?>
					</tbody>
				
				</table>
			</div>
	<!--user-->
