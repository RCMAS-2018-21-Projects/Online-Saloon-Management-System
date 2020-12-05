<?php include_once("../shares/db/mydatabase.inc");
include_once("top.php");
  ?>
 <head>
<style>
 table{
                   border: groove;
                   border-radius: 8px;
                   width:1300px;
       border-collapse:collapse;
               }
               th {
    background-color:darkseagreen;
    color: Black;
    height: 40px;
                   text-align: center;
                   text-transform: uppercase;
}
    
    td{
        text-align: center;
    }
tr{
   
    height: 30px;
    border-bottom: 1px solid #ddd;
}
    img{
        border-radius:50%;
        width:100px;
        height: 100px;
    }
    </style>
 </head>
	<!--user--->

	
	<?php 

$sql="select * from sub_category";
					$tbl=getDatas($sql);
if($tbl==null){
   echo "<div style='position:relative;top:350px;color:blue;left:620px;'>Nothing Added.......</div>";
}
else
{
?>

	
<h1 style="position:relative;left:620px;top:50px;color:black;">SUB CATEGORY</h1>

				<table border="1" style="position:relative;left:20px;top:110px;">
					<thead>
						<tr>
							
                           
                            <th>Sub Category</th>
                           
                            <th>Edit</th>
                           
                            
				       </tr>
					</thead>
					<?php
					
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr >
						
                       
						<td><?php echo $tbl[$i][1];?></td>
                     
						
                        <td><a href="edit_sub.php?id=<?php echo $tbl[$i][0];?>"><font color="blue"><b>EDIT</b></font></a></td>
							</tr>
                        <?php 
					}
}

					?>
					</tbody>
				
				</table>
		
	<!--user-->
