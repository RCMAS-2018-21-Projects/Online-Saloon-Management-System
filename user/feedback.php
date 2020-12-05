<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>

<?php 
include("top.php");

?><html>
<head>
<style>
* {
    box-sizing: border-box;
}
body{
        background:url(images/p87.jpg) no-repeat top fixed ;
        background-size:cover;
        
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
    background-color: #f2f2f2;
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


    <body>
        <h1 style="position:relative;left:480px;top:70px;"> FEED BACK</h1>
        <form action="" method="post">
            <div class="container2" style="position:relative;top:110px;left:250px;">

                    
                <div class="row">
                    <div class="col-25">
                        <label>NAME</label>
                        
                    </div>
                    <div class="col-75">
                        <input type="text" name="name" value="<?php echo $user; ?>" required="" readonly>
                        
                    </div>
                </div>
                
                
                 
                    
                <div class="row">
                    <div class="col-25">
                        <label>FEED BACK</label>
                        
                    </div>
                    <div class="col-75">
                         <textarea name="feed" required></textarea>
                        
                    </div>
                </div>
              
                <div class="row">
                        <div  style="position:relative;left:0px; top:10px">                         
                        <input type="reset" name="reset" value="Cancel">
                        </div>                        
                        <div  style="position:relative;right:50px; top:10px">                         
                         <input type="submit" name="submit" value="Save"> 
                        </div>
                        </div>
           </div>
        </form>
    </body>
</html>
<?php
if(isset($_POST['name'])){
	
	$a=$_POST['name'];
	$b=$_POST['feed'];
	
	$sql="insert into feedback (user,feedback) values('$user','$b')";
	setDatas($sql);
	msgbox("success");
	nextpage("home.php");
}
?>
<br><br><br><br><br><br>