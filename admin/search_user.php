<?php include("../shares/db/mydatabase.inc");
include("top.php");

?>
<head>
 <style>
    body
    {
         background:url(abc.jpg) no-repeat top fixed ;
        background-size:cover;
        height:1200px;
    }
 table{
                   border: 2px solid #111;
                   border-radius: 1em;
                   width:90%;
                   margin-left:0px;
                   
               }
               th {
    background-color:white;
    color: black;
    height: 40px;
                   
}
    td{
        background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
        color:whitesmoke;
        }
    tr:hover{
        background-color: aliceblue;
        color: black;
    }
    
    h1{
        color: black;
    }
    tr{
    height: 50px;
    border-bottom: 1px solid #ddd;
}
    td{
    color: white;
    border-bottom: 1px solid #ddd;
}
.s:link, .aa:visited {
  background-color: #ccc;
  color: red;
  padding: 10px 14px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
   
}
    
    </style>
</head>
<body>
    <?php
      $name=$_POST['u_name'];
    ?>

<h1 style="position: relative;left:600px;top:50px;color:black;">USER INFORMATION</h1>
    <div style="position:relative;left:620px;top:90px;">
    <form action="search_user.php" method="POST" >
<input type="text" name="u_name" placeholder="Search By name">
    <input type="submit" value="Search">
        </form>
</div>
    <table border="1"style="position:relative;top:100px;left:100px">
<thead>
<tr>
       <th width="5%"> ID</th>         
  <th width="10%"> NAME</th>
    <th width="10%">HOUSENAME</th>
  <th width="10%">CITY</th>
  <th width="10%">DISTRICT</th>
    <th width="10%">PINCODE</th>
    <th width="5%">GENDER</th>
    <th width="10%">EMAIL</th>
    <th width="10%">PHONE</th>
    <th width="10%">REGISTERED DATE</th>
  

</tr>
</thead>
<?php
$sql="select * from customerreg where name='$name'";
          $tbl=getDatas($sql);
for($i=0;$i<count($tbl);$i++)
{
	for($j=0;$j<count($tbl[$i]);$j++)
	{

	}


?>
<tbody>
<tr>

<td><?php echo $tbl[$i][0]; ?></td>
<td><?php echo $tbl[$i][1]; ?></td>
<td><?php echo $tbl[$i][2]; ?></td>
<td><?php echo $tbl[$i][3]; ?></td>
<td><?php echo $tbl[$i][4]; ?></td>
<td><?php echo $tbl[$i][5]; ?></td>
<td><?php echo $tbl[$i][6]; ?></td>
<td><?php echo $tbl[$i][7]; ?></td>
<td><?php echo $tbl[$i][8]; ?></td>
<td><?php echo $tbl[$i][9]; ?></td>

<?php
}
?>
</tr>
</tbody>
</table>
</body>