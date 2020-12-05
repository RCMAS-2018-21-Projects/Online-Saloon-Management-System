<?php session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php"); ?>

<head>
<style>
        
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
           
             
            }
            label{
                color: cadetblue;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 400px;
            }
			
            .div1 {
    border-radius: 5px;
    background-color:beige;
    margin: auto;
   padding: 30px;
    width:50%;
    height:70%;                
}
body{
    background: url(images/p87.jpg) no-repeat top fixed;
    height:120%;
    background-size: cover;
}
input[type=submit] {
    background-color: tomato;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    width:100px;
}

input[type=submit]:hover {
    background-color: #ac2925;
}


    </style>
 <script src="..///common/maha.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	<script>
	  		$( function() {
	   			$( "#date" ).datepicker({
	   				minDate: 0
                    
	   			});
            });</script>
    <style>
        .ui-datepicker { 
        height: 400px;
         line-height: 3px;
        }
        
        
    </style>
</head>
	<body>
		<!---feedback-->
			<?php
		if(isset($_GET['id'])){
			$a=$_GET['id'];
			$sql="select * from package where pid='$a'";
			$tbl=getDatas($sql);
			
		}
         $sql="SELECT  `name`  FROM `customerreg` WHERE email='$user'";
    $tbl1=getDatas($sql);
    $name=$tbl1[0][0];
?>
	
    <h3 style="position: relative;left:620px;top:30px;">CONFIRM  </h3>
    	<div class="div1"  style="position: relative;top:60px;">
        <form action="" method="post">
           
            <table style="position: relative;left:10px;top:70px">
                <tr>
                    <td>
                        <label>NAME</label>
                    </td><td>:</td>
                    <td>
                        <input type="text" name="name" value="<?php echo $name;?>" >
                      </td>
                </tr>
                 
                   <tr>
                    <td>
                        <label>PACKAGE NAME</label>
                    </td><td>:</td>
                    <td> <input type="text" name="bid" hidden value="<?php echo $tbl[0][0];?>" >
                        <input type="text" name="wname" value="<?php echo $tbl[0][1];?>" >
                      </td>
                </tr>
               
               <tr>
                    <td>
                        <label>PRICE</label>
                    </td>
                   <td>:</td>
                    <td>
                        <input type="text" name="price" value="<?php echo $tbl[0][3];?>" required=""/>
                      </td>
                </tr>
           
                
                
                
                <tr>
<td>
<label>DATE</label></td>
                    <td>:</td>
<td><input type="text" name="date" id="date" placeholder="mm-dd-yy" class="b" required></td>
    </tr>

<tr>
<td><label>TIME</label></td>
    <td>:</td>
<td><div class="box">
    <label><input type="radio" value="10:30 am" name="time">
    <span class="a">10:30 am</span>
    </label>
    <label><input type="radio" value="10:45 am" name="time">
    <span class="a">10:45 am</span>
    </label>
    <label><input type="radio" value="11:00 am" name="time">
    <span class="a">11:00 am</span>
    </label>
    <label><input type="radio" value="11:15 am" name="time">
    <span class="a">11:15 am</span>
    </label>
    <label><input type="radio" value="11:30 am" name="time">
    <span class="a">11:30 am</span>
    </label>
     <label><input type="radio" value="11:45 am" name="time">
    <span class="a">11:45 am </span>
    </label> 
    <label><input type="radio" value="12:00 pm" name="time">
    <span class="a">12:00 pm</span>
    </label>
    <label><input type="radio" value="12:15 pm" name="time">
    <span class="a">12:15 pm</span>
    </label>
     <label><input type="radio" value="12:30 pm" name="time">
    <span class="a">12:30 pm</span>
    </label>
    <label><input type="radio" value="12:45 pm" name="time">
    <span class="a">12:45 pm</span>
    </label>
    <label><input type="radio" value="14:00 pm" name="time">
    <span class="a">2:00 pm</span>
    </label>
    
<label><input type="radio" value="14:15 pm" name="time">
    <span class="a">2:15 pm</span>
    </label>
    <label><input type="radio" value="14:30 pm" name="time">
    <span class="a">2:30 pm</span>
    </label>
    <label><input type="radio" value="14:45 pm" name="time">
    <span class="a">2:45 pm</span>
    </label>
     <label><input type="radio" value="15:00 pm" name="time">
    <span class="a">3:00 pm</span>
    </label>
    <label><input type="radio" value="15:15 pm" name="time">
    <span class="a">3:15 pm</span>
    </label>
    <label><input type="radio" value="15:30 pm" name="time">
    <span class="a">3:30 pm</span>
    </label>
    <label><input type="radio" value="15:4 pm" name="time">
    <span class="a">3:45 pm</span>
    
    </label>
    </div>
            </tr>
    
    <tr>
    <td><input type="hidden" name="status" value="Active" readonly=""></td></tr>
    
         <tr></tr><tr></tr>
               
				<tr><td></td><td><input type="submit" value="CONFIRM"></td></tr>
            </table>
            
            
        </form></div>
                                  <div> </div>
								   
        <div class="clearfix"></div>

	

</body>
<?php
if(isset($_POST['name']))
{
$a=$_POST['name'];
$b=$_POST['bid'];
$c=$_POST['wname'];
$d=$_POST['price'];
$e=$_POST['date'];
$f=$_POST['time'];
    
    $h=$_POST['status'];
       date_default_timezone_set('Asia/Calcutta');
    $date1 = date('h:i', time());// current time
     $v = str_replace(':','',$f);
    $i=date('D', strtotime($e));
   $newdate=date("Y-m-d",strtotime($e));
    $da= date("m/d/Y");
    $t = Date("Hs"); 
     $sql="select time from package2 where time='$f' and date='$newdate' ";
    $tbl=getDatas($sql);
      if($v < $t && $da == $e){
        msgbox('Select another slot .');
    }
   else if($tbl!=null){
              
              msgbox('Sorry... No time slot available.');

    }
    else{ 
		$sql="insert into payment(purpose,date,amount,email) values('$c','$newdate','$d','$user')";
setDatas($sql);



$sql="insert into package2(name,email,package_name,packageid,price,date,time,status) values('$a','$user','$c','$b','$d','$newdate','$f','$h')";
setDatas($sql);


msgbox('Successfully BOOKED');
    //nextpage('payment1.php?a='.$id.'& b='.$date);
    nextpage('payment1.php?a='.$id.'& b='.$d);

   }
	}

?>