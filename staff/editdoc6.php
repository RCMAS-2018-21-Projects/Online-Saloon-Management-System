<?php
include_once("../shares/db/mydatabase.inc");
 include_once("top.php");
?>
<head>


<style>
       
input,textarea,select,.ab{
                border: 2px solid;
             border-radius: 7px;
             
           
             
            }
            label{
                color: black;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 500px;
            }
            .div1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: auto;
   padding: 30px;
    width:50%;
}

input[type=submit],.ab {
    margin: auto;
    padding: 10px 25px;
    margin-top: 25px;
    background-color: #146eb4;
    color: white;
	border:none;
	outline:none;
    letter-spacing: 1px;
    outline: 0;
    cursor: pointer;
}
.heading h1 {
    font-weight: 600;
    letter-spacing: .5px;
    font-size: 40px;
    margin-bottom: .9em;
    text-align: center;
    color: whitesmoke;
    text-transform: uppercase;
    position: relative;
    margin-top: 0;
}
input[type=submit]:hover
{
	background-color: #ff9900;
    color: white;
}
.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width:700px;
    height:800px;
  margin: auto;
  text-align:left;
  font-family: arial;
}
   body{
        background:url(abc.jpg) no-repeat top fixed ;
        background-size:cover;
     height: 900px;
        
    }
input[type=text]:hover
{
	background-color: gainsboro;
    color: black;
}
    
</style> 
</head>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="select * from package where pid='$id'";
    $tbl=getDatas($sql);
    
}?>

<div class="card">
<div class="w3_login">
<div class="heading"><br><br>
    <h1>EDIT PACKAGE</h1></div>

<form action="" method="POST" >
            <table   style="position: relative;left:100px;top:5px; " >
			<div id="err" style="color: red;height: 10px"></div>

                
         
                <tr>
                    <td>
                        <label>Package Name</label>
                    </td>
                    <td>
						
                       <input type="text" name="doc_name" value="<?php echo $tbl[0][1];?>" title="Must contain text values only"  pattern="[A-Za-z]{.}{ }{1,15}" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
          
                 <tr>
                    <td>
                        <label>Package Description</label>
                    </td>
                    <td>
						
                       <input type="text" name="doc_name1" value="<?php echo $tbl[0][2];?>" title="Must contain text values only"  pattern="[A-Za-z]{.}{ }{1,15}" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           
          
                  <tr>
                    <td>
                        <label>Package Price</label>
                    </td>
                    <td>
						
                       <input type="text" name="doc_name2" value="<?php echo $tbl[0][3];?>" title="Must contain text values only"  pattern="[A-Za-z]{.}{ }{1,15}" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
         
        
                
              
    
                
             
                
            </table>
       
    <center><input type="submit" value="UPDATE"><br><br></center>
                    
    </form>  
            </div>
            
       
                                   </div>

<?php
		
		
		if(isset($_POST['doc_name']))
        {
		//$a=$_POST['regno'];
		$b=$_POST['doc_name'];
		//$c=$_POST['depart'];
       $c=$_POST['doc_name1'];
            $d=$_POST['doc_name2'];
        
       
      //  $i=$_POST['email'];

		
		$sql="UPDATE package SET pname='$b',pdes='$c',pprice='$d' where pid='$id'";
		setDatas($sql);
        	
		msgbox("successfully updated");
            nextpage("viewdocpackage.php");	
		
			
		}
		?>
