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
		}
        th{
            text-align: center;
        }
        td{
            text-align: center;
        }
        INPUT[TYPE=SUBMIT],INPUT[TYPE=RESET]
{
	background-color:#CCFF66;
	COLOR:BLACK;
	HEIGHT:35pX;
	WIDTH:100PX;
    border-radius:8px;
}
        tr{
            height: 40px;
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
    if($txtStartDate==null&&$txtEndDate==null)
    {
      $sql="select * from  payment order by date";
    $tbl=getDatas($sql);  
        $flag=0;
    }
    else
    {
    $query="select * from  payment where date between'$txtStartDate'and'$txtEndDate'order by date";
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

		

	
									
<h3 style="position:relative;left:600px;top:-50px;"><b><u>PAYMENT REPORT</u></b></h3>
    <?php
     if($flag==1)
     {
         
    ?>
    <div style="position:relative;left:350px;top:30px">
		<label>
			<font color="blue">DATE: </font>
		</label>   <?php echo $txtStartDate;?>
		
		<label>
			<font color="blue">  To </font>
		</label>   <?php echo $txtEndDate;?>
</div>
    <?php
     }
    ?>
<center>
	
				
					<table border="1" style="position:relative;width:1200px;left:0px;top:-30px;">
<thead>
<tr>                        <th>EMAIL ID</th>
                            <th>SERVICE/PACKAGE NAME</th>
                            <th>DATE</th>
                            <th>AMOUNT</th>
                            
                           
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
 <td><?php echo $tbl[$i][4];?></td>
<td><?php echo $tbl[$i][1];?></td>
                        <td><?php echo $tbl[$i][2];?></td>
                        <td><?php echo $tbl[$i][3];?></td>
    </tr>
   <?php $sum+=$tbl[$i][3];?>              

<?php
}

?>
<tr style="background-color:blue;">
    <td>Total</td><td></td><td></td>
    <td><?php echo $sum; ?></td></tr>
                        </tbody>
<div style="position:relative;left:40px;top:600px">
<input type="submit" name="sub" id="a" value="Print" onclick="fun();" size="500"/>
</div>
						<?php
}
}
					     ?>
					</tbody>
				
				</table>
    
    
    
</html>