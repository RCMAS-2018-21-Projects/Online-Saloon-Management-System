<?php include("../shares/db/mydatabase.inc");
include("top.php");
?>
<head>
<style>
 table{
                   border: 2px solid #111;
                   border-radius: 2px;
                   width: 100%;
                   margin-left:2px;
     
                   
               }
               th {
    background-color: #17c3a2;
    color: white;
    height: 40px;
}
     td,th,tr
    {
        text-align: center;
    }
tr{
    height: 30px;
    border-bottom: 1px solid #ddd;
}

    </style>
</head>

<div style="position:relative;border:groove;width:200px;height:80px;border-radius:8px;background-color:bisque;top:70px;left:100px;">
<br>
&emsp;&emsp;<a href="employee_info.php">View USER</a>

</div>


<?php
$sql="select login.*,customerreg.* from login JOIN customerreg ON login.username=customerreg.email where login.status='1' " ;
                     $tbl=getDatas($sql);
if($tbl==null)
{
    echo "<div style='position:relative;top:250px;left:620px;'><font color='red'>No Data Found...</font></div>";

}
else
{
    ?>
<h1 style="position: relative;left:500px;top:30px;color:red;">User</h1>
    <table border="1"style="position:relative;top:40px;">
<tr>

<tr>
                
                
  <th> NAME</th>
    <th>HOUSENAME</th>
  <th>CITY</th>
  <th>DISTRICT</th>
    <th>PINCODE</th>
    <th>GENDER</th>
    <th>EMAIL</th>
    <th>PHONE</th>
    <th>DOJ</th>
</tr>
<?php
for($i=0;$i<count($tbl);$i++)
{
	for($j=0;$j<count($tbl[$i]);$j++)
	{

	}


?>
<tr>
<td><?php echo $tbl[$i][5]; ?></td>
<td><?php echo $tbl[$i][6]; ?></td>
<td><?php echo $tbl[$i][7]; ?></td>
<td><?php echo $tbl[$i][8]; ?></td>
<td><?php echo $tbl[$i][9]; ?></td>
<td><?php echo $tbl[$i][10]; ?></td>
<td><?php echo $tbl[$i][11]; ?></td>
<td><?php echo $tbl[$i][12]; ?></td>
    <td><?php echo $tbl[$i][13]; ?></td>


</tr>
<?php
}
}
?>
</table>







