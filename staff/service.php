<?php 
 include_once("../shares/db/mydatabase.inc"); 
 ?>

<?php
include("top.php");
?>
<html>
<head>
    
      <style>
* {
    box-sizing: border-box;
}

input[type=text],input[type=email],input[type=date] ,input[type=password],select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] ,input[type=reset]{
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    float: right;
}
body{
        background:url(a.jpg) no-repeat top fixed ;
        background-size:cover;
        
    }
input[type=submit],input[type=reset]:hover {
    background-color: #45a049;
}

.container2 {
    border-radius: 2px;
    background-color: #ffffff00;
    padding: 20px;
    width: 50%
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 60px) {
    .col-25, .col-75, input[type=submit],input[type=reset] {
        width: 75%;
        margin-top: 0;
    }
}
</style>
    </head>
    <?php
$sql="select ifnull(max(sid),0)+1 from addservice";
$tbl=getDatas($sql);
?>
<body>  <h1 style="position:relative;left:500px;top:100px;">SERVICE</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <table style="position:relative;top:130px;left:350px;">
        
        <tr>

           <td>Service ID</td><td><input type=text name ="sid" value="<?php echo $tbl[0][0]; ?>"required readonly></td>
    
    </tr>
        
     <tr>
	<td>
		Select Category</td>
		
		<?php 
     $sql="select category_name from category ";
        $tbl=getDatas($sql);
    ?>
<td><select name="category" required >
     <?php foreach($tbl as $row) {?>
<option  value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
<?php } ?>
	</select>
		</td>
	</tr>
        
        
         <tr>
	<td>
		Select Sub Category</td>
		
		<?php 
     $sql="select sub_cat from sub_category ";
        $tbl=getDatas($sql);
    ?>
<td><select name="subcategory" required >
     <?php foreach($tbl as $row) {?>
<option  value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
<?php } ?>
	</select>
		</td>
	</tr>
        
        
        
        
 
        
          <tr>
    <td>Service Name</td>
            <td><input type="text" name="sname"  required></td>
    
    </tr>
        
        
          <tr>
    <td>Service Duration</td>
            <td><input type="text" name="sduration" required></td>
    
    </tr>
        
          <tr>
    <td>Service Cost</td>
            <td><input type="text" name="scost" required></td>
    
    </tr>
          
        
        <tr>
        <td><input type="submit" value="ADD"></td>
        
        </tr>
        
        
        
        
        </table>
    
    
    </form>
    
    
    
    
    
    
    </body>
</html>



<?php

if(isset($_POST['category'])){
            $e1=$_POST['category'];
        $a=$_POST['subcategory'];
			$b=$_POST['sname'];
    $c=$_POST['sduration'];
    $d=$_POST['scost'];
    $sql="select * from addservice where servicename='$b'";    
    $tbl=getDatas($sql);
    $em1=$tbl[0][1];
    if($em1=='')
    {
			
		$sql="insert into addservice(scategory,ssubcategory,servicename,serviceduration,servicecost) values('$e1','$a','$b','$c','$d')";
		setDatas($sql);
			
			echo "saved".$fname;
    nextpage("home.php");
}
else{
    msgbox("already exist");
}
		}
		
	
	
	/*else
	{
		echo "Invalid file";
	}
*/
?>









<br><br><br><br><br><br><br>
