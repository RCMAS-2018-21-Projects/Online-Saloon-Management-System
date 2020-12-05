
<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc"); 
include_once("top.php");
?>
<style>
    table{
        
        width: 800px;
        height: 200px;
    }
    td{
        text-align: center;
        color:whitesmoke;
        
    }
    th{
        text-align: center;
        color:orange;
    }
.container_1 {
    background-color:beige;
	width: 810px;
    margin: auto;
    padding: 30px 30px 30px;
    box-sizing: border-box;
   -webkit-box-shadow: 0 0 40px #aaa;
    -moz-box-shadow: 0 0 40px #aaa;
    box-shadow: 0 0 40px #aaa;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
    -o-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -webkit-box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
    -moz-box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
    box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
    background: rgb(0, 0, 0); /* Fallback color */
    background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
    color:whitesmoke;
}
    
    body{
        background:url(p60.jpg) no-repeat top fixed ;
        background-size:cover;
        
    }
</style>
<body>
    <h1 style="position:relative;left:420px;top:50px;">PACKAGE BOOKING INFORMATION</h1>

<br><br><br><br>
<?php
$sql="select * from package2";
$tbl=getDatas($sql);
if($tbl==null){
        echo "<div style='position:relative;left:520px;top:120px;'>No Bookings</div>";

}else
{
    ?>
<div class="container_1">
    <table>
    <tr>    
        <th>Id</th>
        <th>Email</th>
        <th>Package</th>
        <th>Price</th>
        <th>Date</th>
            
        <th>Time</th>
		

        </tr>
 

<?php
    for($i=0;$i<count($tbl);$i++){
        for($j=0;$j<count($tbl[$i]);$j++){
        
    }
?>
        
    <tr>
         <td>
    <?php echo $tbl[$i][0];?>
        </td>
         <td>
    <?php echo $tbl[$i][1];?>
        </td>
    <td>
    <?php echo $tbl[$i][2];?>
        </td>
        <td>
        <?php echo $tbl[$i][4];?>
        </td>
        <td>  
        <?php echo $tbl[$i][5];?>
        </td>
        <td>
        <?php echo $tbl[$i][6];?>
        </td>
    </tr>    
   <tr><td></td></tr>
    <?php
    }
}?>
         </table>
</div>
</body>
<?php

if(isset($_GET['a'])){
    $p=$_GET['a'];
    $sql="SELECT  `date1`  FROM `tbl_booking` WHERE `bid`='$p'";
    $tbl=getDatas($sql);
    $d=$tbl[0][0];
  
    
    $sql="UPDATE `tbl_booking` SET status='Inactive' WHERE bid='$p'  ";
    setDatas($sql);
    nextpage('my_book.php');
  

}
?>
