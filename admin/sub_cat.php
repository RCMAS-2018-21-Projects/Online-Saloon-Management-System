<?php include_once("../shares/db/mydatabase.inc"); 
include("top.php");
?>

<html>
<head>
<title>Magic Mirror</title>
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
$sql="select ifnull(max(sid),0)+1 from sub_category";
$tbl=getDatas($sql);
?>  
<center>

<form action="" method="post">
<table>
<h1>SUB CATEGORY</h1><br><br>
    <tr>
    <td>SUB CATEGORY ID</td>
    <td><input type="text" name="sid" value="<?php echo $tbl[0][0]; ?>" readonly></td>
    </tr>
    
    
	<tr>
	<td>
		SELECT CATEGORY</td>
		
		<?php 
     $sql="select category_name from category ";
        $tbl=getDatas($sql);
    ?>
<td><select name="cat" required >
     <?php foreach($tbl as $row) {?>
<option  value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
<?php } ?>
	</select>
		</td>
	</tr>
<tr>
<td>
<label>ENTER SUB CATEGORY:</label>
</td><td>
<input type="text" name="c_name"></td>
</tr>


    </table>
     <td style="position:relative;left:100px">
         <input type="submit" name="submit1" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" value="Reset">
</form></center>
</body></html>

<?php
if(isset($_POST['sid']))
{
$a=$_POST['sid'];
$b=$_POST['cat'];
    $c=$_POST['c_name'];

    $sql="select * from sub_category where sub_cat='$c'";	
	$tbl=getDatas($sql);
    $em1=$tbl[0][2];
    if($em1=='')
    {
    

$sql="insert into sub_category values('$a','$b','$c')";
setDatas($sql);
		msgbox('Successfully stored');
    nextpage("home.php");
    //nextpage('home.php');
    }
    else
    {
        msgbox("already exist");
    }
}

?>

  <br><br><br><br>
    
    
  
    