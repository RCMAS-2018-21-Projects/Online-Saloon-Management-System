
<?php

 include_once("../shares/db/mydatabase.inc");

include_once("top.php");
?>
<style>
    table{
        width: 1000px;
        height: 300px;
        
    }
    td{
    
        text-align: center;
        color: white;
    }
    th{
      
        text-align: center;
        color:orange;
        
    }body{
        background:url(abc.jpg) no-repeat top fixed ;
        background-size:cover;
        
    }
  
.container_1 {
    background-color:lightcyan;
	width: 1050px;
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
  
    background: rgb(0, 0, 0); /* Fallback color */
    background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
    color:whitesmoke;
}
    
    body{
        background:url(abc.jpg) no-repeat top fixed ;
        background-size:cover;
        
    }
    
</style>
<body>
<br><br><br><br>
    <h1>SERVICE BOOKING</h1>
<?php
$sql="select * from tbl_booking where status='paid'";
$tbl=getDatas($sql);
if($tbl==null){
        echo "<div style='position:relative;left:620px;top:150px;color:red'>No Bookings</div>";

}else
{
    ?>
<div class="container_1">
    <table>
        
    <tr>
        
     
        
        <th>CUSTOMER </th>
    
          
        <th>CATEGORY</th>

         
        <th>SERVICE NAME</th>
        
        <th>DATE</th>
        
        <th>TIME</th>
        
        <th>COST</th>
        
        
        </tr>

<?php
    for($i=0;$i<count($tbl);$i++){
        for($j=0;$j<count($tbl[$i]);$j++){
        
    }
?>

    <tr>
   
        
    <td>
    <?php echo $tbl[$i][1];?>
        </td>
      
        <td>
            
        <?php echo $tbl[$i][3];?>
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
         <td>
        <?php echo $tbl[$i][7];?>
        </td>
  
    </tr>    
    


<?php
    }
}?>
    
    </table>

    
</div>
    

    
</div>
    
    
    
    
    
    
    
    
</body>
<?php
if(isset($_GET['a'])){
    $p=$_GET['a'];
    $sql="SELECT  `date1`  FROM `tbl_booking` WHERE `bid`='$p'";
    $tbl=getDatas($sql);
    $d=$tbl[0][0];
    echo $d;
    $dd=date('d',strtotime($d));
    echo $dd;
    $cur=date('m-d-y');
    $cu=date('y',strtotime($cur));
    echo $cu;
    //$prv=$dd-1;
    //$nex=$dd;
    if($dd<$cu){
    
    $sql="DELETE FROM `tbl_booking` WHERE bid='$p'  ";
    setDatas($sql);
    nextpage('my_book.php');
    }
    else{
        msgbox('Sorry..You cant cancel after and now from the booked date');
    }
}
?>
