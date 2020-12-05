<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>

<head>
<style>
       
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
           
             
            }
            label{
                color: blue;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 200px;
            }
            .div1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: auto;
   padding: 30px;
    width:50%;
}
body{ 
        background:url(images/p87.jpg) no-repeat top fixed ;
        background-size:cover;
        
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
</head>

<?php
$sql="select * from staffreg where email='$user'";
$tbl=getDatas($sql);

for($i=0;$i<count($tbl);$i++)
		{
			
			for($j=0;$j<count($tbl[$i]);$j++)
			{
			
			}
		
?>

<div class="w3_login">
    <h3 style="position: relative;top:250px;left:620px;"><font color="blue">My Profile</font> </h3>
			
        <form action="" method="post" >
            <table style="position: relative;left:480px;top:280px">
                <tr>
                    <td>
                        <label> User Name</label>
                    </td>
                    <td>
                        <?php echo $tbl[$i][1];?>
                      </td>
                </tr>
           <tr><td></td></tr>
                 
                
               <tr>
                    <td>
                        <label> Gender:</label>
                    </td>
                    <td>
                          <?php echo $tbl[$i][3];?>
                      </td>
                </tr>
               
                <tr><td></td><td>
                 <tr>
                    <td>
                        <label>Phone Number:</label>
                    </td>
                    <td>
                          <?php echo $tbl[$i][5];?>
                      </td>
                </tr> <tr><td></td></tr>
				<tr>
                    <td>
                        <label> Email:</label>
                    </td>
                    <td>
                          <?php echo $tbl[$i][4];?>
                      </td>
                </tr>
               
                <tr><td></td><td>
                 <tr>
                    <td>
                        <label> Address:</label>
                    </td>
                    <td>
                          <?php echo $tbl[$i][2];?>
                      </td>
                </tr>
				<tr><td></td><td>
                 <tr>
                    <td>
                        <label> Joining Date:</label>
                    </td>
                    <td>
                          <?php echo $tbl[$i][6];?>
                      </td>
                </tr>
               <tr><td></td><td></td></tr>
			    <tr><td></td><td></td></tr>
			   
                <tr><td>
                        <div class="w3l_header_right1">
			&emsp;&emsp;&emsp;&emsp;<h2><a href="edit.php"><font color="red">EDIT</font></a></h2>
		</div></td></tr>
            </table>
            
            
        </form>
                                   </div>
        <div class="clearfix"></div>
		

<?php
		}
		?>
