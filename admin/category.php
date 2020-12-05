<?php include_once("../shares/db/mydatabase.inc"); 
include("top.php");
?>

<html>
<head>
<title>parents's form</title>
<style>
body {background:url(abc.jpg) no-repeat top fixed ;
        background-size:cover;
      }
     
input[type=text],input[type=email],input[type=date],input[type=time],input[type=password],select
{
	border-radius:3px;
	height:50px;
	width:300px;
}

input[type=submit],input[type=reset]
{
	background-color:tomato;
	color:white;
	border:none;
	width:70px;
	height:30px;
}
input[type=submit]:hover,input[type=reset]:hover
{
	background-color:red
}
table
{
	border-radius:3px;
	height:200px;
	cellspacing:300px;
	cellpadding:200px;
}
textarea
{
	border-radius:4px;
	height:50px;
	width:300px;
}


</style>
</head>

<body>
    <?php
$sql="select ifnull(max(id),0)+1 from category";
$tbl=getDatas($sql);
?> 
<center>

<form action="" method="post">
<table>
<h1>CATEGORY</h1><br><br>
    <tr>
    <td>CATEGORY ID</td>
        <td><input type="text" name="cid" value="<?php echo $tbl[0][0]; ?>" readonly></td>
    
    </tr>
<tr>
<td>
<label>ENTER CATEGORY:</label>
</td><td>
<input type="text" name="c_name"></td>
</tr>

    </table>
     <td style="position:relative;left:100px">
         <input type="submit" name="submit1" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;

</form></center>
</body></html>

<?php
if(isset($_POST['cid'])){
	
	$a=$_POST['cid'];
    $a1=$_POST['c_name'];
	
    	
	$sql="select * from category where category_name='$a1'";	
	$tbl=getDatas($sql);
    $em1=$tbl[0][1];
    if($em1=='')
    {
	$sql="insert into category values('$a','$a1')";
	setDatas($sql);

    	nextpage("home.php");}
    else
    {
         msgbox("Category already exist"); 
    }
}
?>

  <br><br><br><br>
    
    
    