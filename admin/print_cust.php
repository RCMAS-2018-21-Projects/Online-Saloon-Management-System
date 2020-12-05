<?php 
include_once("../shares/db/mydatabase.inc");
include("top.php");
?>
 <head>
<style>
 th{
			height: 40px;
			background-color: blue;
			color: white;
            text-align: center;
		}
        td{
            text-align: center;
            height: 60px;
        }
        INPUT[TYPE=SUBMIT],INPUT[TYPE=RESET]
{
	background-color:#CCFF66;
	COLOR:BLACK;
	HEIGHT:35pX;
	WIDTH:100PX;
    border-radius:8px;
}
  tr
  {
  	height: 50px;
  }
    </style>
 </head>
	<!--user--->
	

<link rel="stylesheet" href="file:///F|/css/print.css" type="text/css">
<script>
    function fun()
    { 
       var a=document.getElementById('a');
       a.style.visibility='hidden';
       window.print();
      
           }
    </script>
		<?php
		if(isset($_POST['search']))
{
    $txtStartDate=$_POST['txtStartDate'];
    $txtEndDate=$_POST['txtEndDate'];
	//echo $txtStartDate;
            if(($txtStartDate==null)&&($txtEndDate==null))
            {
                 $sql="select * from customerreg order by j_date" ;
                 $tbl=getDatas($sql);
                $flag=0;
                 
            }
                
	else
    {
    $query="select * from customerreg where j_date between'$txtStartDate'and'$txtEndDate' order by j_date";
    $tbl=getDatas($query);
        $flag=1;
    }
if($tbl==null){
   echo "<div style='position:relative;top:150px;color:blue;left:620px;'>NO CUSTOMER JOINED </div>";
}
    
	else{
        ?>
	<div width="800px">
<img src="123.png" height="150" width="200" style="position:relative;top:20px;left:200px;">
<div style="position:relative;top:-90px;left:450px;"><b>MAGIC MIRROR<br>
							Kakkanad,Ernakulam<br>
							682016<br>
							Telephone : +91 9020996500<br>
							Email : <a class="mail" href="mailto:mail@example.com">magicmirror@gmail.com</a></b></div>
		<h1 style="position:relative;left:580px;top:-40px;color:blue"><u>MAGIC MIRROR</u></h1>
		<br>
		<br>
		<br>

		
									
<h2 style="position:relative;left:550px;top:-50px;"><b><u>CUSTOMER REPORT</u></b></h2>
<?php
        if($flag==1)
        {
            ?>
<div style="position:relative;left:150px;top:-30px">
		<label>
			<font color="blue">Date: </font>
		</label>   <?php echo $txtStartDate;?>
		<label>
			<font color="blue"> TO </font>
		</label>   <?php echo $txtEndDate;?>
</div>
<?php
        }
        ?>

				<table border="1" style="position:relative;width:1200px;left:120px;top:-40px;">
					<thead>
						<tr>
								<th>NAME</th>
							
							<th>HOUSE NAME</th>
							 <th>CITY</th>
							  <th>DISTRICT</th>
							  <th>PINCODE</th>
							  <th>GENDER</th>
							  <th>EMAIL</th>
                            <th>PHONE NO</th>
                           
                         
							
							<th>REGISTERED DATE</th>
							
							
							
						</tr>
					</thead>
					<?php
					
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr>
						<td><?php echo $tbl[$i][1];?></td>
						<td><?php echo $tbl[$i][2];?></td>
						<td><?php echo $tbl[$i][3];?></td>
						
						
						<td><?php echo $tbl[$i][4];?>
						
						</td>
				          <td><?php echo $tbl[$i][5];?></td>
				          <td><?php echo $tbl[$i][6];?></td>
                        <td><?php echo $tbl[$i][7];?></td>
                        <td><?php echo $tbl[$i][8];?></td>
                        <td><?php echo $tbl[$i][9];?></td>
						</tr>
					<?php 
					}
	

					?>
										

<div style="position:relative;left:600px;top:650px">
<input type="submit" name="sub" id="a" value="Print" onclick="fun();" size="500"/>
</div>
                        </div>
						<?php
}
}
					     ?>
					</tbody>
				
				</table>