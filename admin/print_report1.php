<?php
include('top.php');
include_once('../shares/db/mydatabase.inc');
?>

<html>
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
        $sql="select * from  staffreg order by doj";
    $tbl=getDatas($sql);
     $flag=0;
    }
    else
    {
    $query="select * from  staffreg where doj between'$txtStartDate'and'$txtEndDate'order by doj";
    $tbl=getDatas($query);
        $flag=1;
    } 
if($tbl==null){
 echo "<div style='position:relative;top:150px;color:blue;left:620px;'>NO DATA...</div>";
}
else{
        ?>
  
<img src="123.png" height="150" width="200" style="position:relative;top:20px;left:200px;">
<div style="position:relative;top:-90px;left:450px;"><b>MAGIC MIRROR<br>
							Kakkanad,Ernakulam<br>
							682016<br>
							Telephone : +91 9020996500<br>
							Email : <a class="mail" href="mailto:mail@example.com">magicmirror@gmail.com</a></b></div>

		<h1 style="position:relative;left:580px;top:-20px;color:blue"><u>MAGIC MIRROR</u></h1>
		<br>
		<br>
		<br>
    <?php
    if($flag==1)
    {
    ?>
<div style="position:relative;left:120px;top:30px">
		<label>
			<font color="blue"> DATE:  </font>
		</label>   <?php echo $txtStartDate;?>
		
		<label>
			<font color="blue"> To </font>
		</label>   <?php echo $txtEndDate;?>
</div>
<?php
    }
 ?>
		

	
									
<h3 style="position:relative;left:580px;top:-80px;"><b><u>STAFF BOOKING REPORT</u></b></h3>

	
				
					<table border="1" style="position:relative;width:1200px;left:120px;top:-30px;">
<thead>
<tr>
                            <th> NAME</th>
                            <th>HOUSENAME</th>
                         
                            <th>CITY</th>
                            <th>PINCODE</th>
                           <th>PHONE</th>
                           <th>EMAIL</th>
                            <th>DOJ</th>
                           
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
                        <td><?php echo $tbl[$i][2];?></td>
                        <td><?php echo $tbl[$i][3];?></td>
                      <td><?php echo $tbl[$i][5];?></td>
                       <td><?php echo $tbl[$i][8];?></td>
                       <td><?php echo $tbl[$i][7];?></td>
    <td><?php echo $tbl[$i][9];?></td>
                        
                       

<?php
}

?>

<div style="position:relative;left:650px;top:600px">
<input type="submit" name="sub" id="a" value="Print" onclick="fun();" size="500"/>
</div>
						<?php
}
}
					     ?>
					</tbody>
				
				</table>
    
    
    
</html>