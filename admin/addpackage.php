<?php include_once("../shares/db/mydatabase.inc");?>

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
body{
        background:url(a.jpg) no-repeat top fixed ;
        background-size:cover;
        
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
$sql="select ifnull(max(pid),0)+1 from package";
$tbl=getDatas($sql);
?>
    
    
<body>
     <h1 style="position:relative;left:420px;top:100px;">PACKAGE</h1>
    
    <form action="" method="post" enctype="multipart/form-data">
        <table style="position:relative;top:110px;left:250px;">
    <tr>
        <td>Package ID</td><td><input type=text name ="pid" value="<?php echo $tbl[0][0]; ?>"required readonly></td>
        </tr>
    
      <tr>
        <td>Package Name</td><td><input type=text name ="pname" required></td>
        </tr>
    
    
          <tr>
        <td>Package Description</td><td><input type=text name ="pdes" required></td>
        </tr>
    
    
          <tr>
        <td>Package Price</td><td><input type=text name ="pprice" required></td>
        </tr>
      <tr>
        <td>Image</td><td><input type="file" name ="file" required></td>
        </tr>
            <br>
    <tr>
            <td><input type="submit" value="ADD"></td>
            <td><input type="reset" value="CANCEL"></td>
            
            </tr>
        
    
    </table>
    </form>
   
    
    
    
    
    
    </body>

</html>



	<?php
$fldr = "../uploads";
	$allowedExts = array("jpg", "gif", "jpeg","mp4");
	$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	$f=$_FILES["file"]["name"];
	
	//echo "upload/$f";

	
	$size = $_FILES["file"]["size"];
	if($_FILES["file"]["size"] > 5000000)
	{
		die("File Size is ".($size/1000000)."MB, Maximum allowed size is 5MB");
	}
	if ((($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "video/mp4"))
	
	&& ($_FILES["file"]["size"] <= 50000000)
	&& in_array($extension, $allowedExts)){
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " .$_FILES["file"]["error"]. "<br />";
		}
		else
		{
		if (file_exists("$fldr/" .$_FILES["file"]["name"]))
		{
			echo $_FILES["file"]["name"] . " already exists. ";
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],"$fldr/" . $_FILES["file"]["name"]);
			

			$mv_name = $_FILES["file"]["name"];		
			$mv_type = $_FILES["file"]["type"];
				$fname=$fldr."/".$mv_name;
			$mv_size = $_FILES["file"]["size"];
        }
if(isset($_POST['pname'])){
            $e1=$_POST['pname'];
        $a=$_POST['pdes'];
			$b=$_POST['pprice'];
			 
    $sql="select * from package where pname='$e1'";    
    $tbl=getDatas($sql);
    $em1=$tbl[0][1];
    if($em1=='')
    {
			
		$sql="insert into package(pname,pdes,pprice,pimage) values('$e1','$a','$b','$fname')";
		setDatas($sql);
        msgbox('Successfully Added');
    nextpage("home.php");
        
			
			
        }
        else
        {
msgbox("already exist");

        }
		}
		}
	}
	
	/*else
	{
		echo "Invalid file";
	}
*/
?>










<br><br><br><br><br><br>

